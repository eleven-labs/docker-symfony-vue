import nock from 'nock';
import Vue from 'vue';

import Container from './index.vue';

import Playground from '../../components/Playground/index.vue';
import Popup from '../../components/Popup/index.vue';
import StickyPopup from '../../components/Popup/sticky.vue';
import Spinner from '../../components/Spinner/index.vue';

import * as store from '../../stores';

window.matchMedia = () => ({
  matches: true,
  addListener: jest.fn(),
});

Object.defineProperty(window.location, 'pathname', {
  value: '/',
  writable: true,
});

const mockedStore = {
  state: {
    furnitures: {
      list: [],
      background: {
        id: null,
        picture: { ld: 'my-background.png', hd: 'my-background.png' },
        points: [],
      },
      isFetching: false,
      error: '',
    },
    language: {
      local: '',
      baseUrl: '',
      error: false,
    },
    board: {
      hd: '',
      ld: '',
      isFetching: false,
      error: '',
      id: null,
    },
  },
  getters: {
    getSpots: () => [],
    getCategories: [
      {
        name: 'n1',
        picto: {
          hd: 'my-image-hd.jpg',
          ld: 'my-image-ld.jpg',
        },
      },
    ],
  },
};

global.Translator = {
  trans: () => '',
};

describe('entrypoint', () => {
  afterEach(() => {
    nock.cleanAll();
    delete global.dataLayout;
  });

  global.dataLayout = {
    baseUrl: 'IT/it',
    currentRoom: { image: 'my-background.png' },
  };

  global.screen = {
    orientation: {
      type: 'landscape-primary',
      onchange: () => {},
    },
  };

  document.body.innerHTML = '<div id="app"></div>';
  it('should create a new Vue', () => {
    nock('http://localhost/').get('/app_dev.php/api/backgrounds/21').reply(200, {
      categories: [],
      id: 21,
      image: 'image.url',
      points: [],
    });

    const vm = require('./entrypoint').vm; // eslint-disable-line global-require

    expect(vm instanceof Vue).toBe(true);
  });
});

describe('data', () => {
  it('should return an object', () => {
    expect(Container.data()).toEqual({
      selectedCategory: 0,
      minFurnitures: 10,
      maxFurnitures: 50,
      menuScroll: false,
      landscape: true,
      quality: 'ld',
    });
  });
});

describe('components', () => {
  it('should declare components', () => {
    expect(Container.components).toEqual({
      Playground,
      Popup,
      StickyPopup,
      Spinner,
    });
  });
});

describe('computed', () => {
  describe('getSpots', () => {
    const spy = jest.spyOn(mockedStore.getters, 'getSpots');

    const Ctor = Vue.extend(Container);
    const vm = new Ctor({
      store: mockedStore,
    }).$mount();

    const spots = vm.getSpots;

    it('should call getSpots with a formated list', () => {
      expect(spy).toHaveBeenCalledWith('n1');
      expect(spots).toEqual([]);
    });
  });
});

describe('methods', () => {
  store.default.dispatch = jest.fn();

  describe('onOrientationChange', () => {
    const Ctor = Vue.extend(Container);
    const vm = new Ctor({
      store: mockedStore,
    }).$mount();

    it('should get the orientation', () => {
      global.screen = {
        orientation: {
          type: 'landscape-primary',
          onchange: () => {},
        },
      };

      vm.onOrientationChange();
      expect(vm.landscape).toBe(true);
    });
  });

  describe('getBoard', () => {
    store.default.dispatch = jest.fn();

    const Ctor = Vue.extend(Container);
    const vm = new Ctor({
      store: mockedStore,
    }).$mount();

    it('should dispatch getBoard', () => {
      vm.getBoard('element');
      expect(store.default.dispatch).toBeCalledWith('getBoard', { element: 'element' });
    });
  });

  describe('changeCategory', () => {
    const Ctor = Vue.extend(Container);
    const vm = new Ctor({
      store: mockedStore,
    }).$mount();

    vm.changeCategory(1000);

    it('should set selectedCategory', () => {
      expect(vm.selectedCategory).toBe(1000);
    });
  });

  describe('changeFurnitureBackground', () => {
    const Ctor = Vue.extend(Container);
    const vm = new Ctor({
      store: mockedStore,
    }).$mount();

    vm.changeFurnitureBackground([1, 2])(3);

    it('should dispatch the action', () => {
      expect(store.default.dispatch).toBeCalledWith({
        type: 'changeFurnitureBackground',
        cat: 0,
        furniture: [1, 2],
        value: 3,
      });
    });
  });

  describe('saveBackground', () => {
    // store.default.dispatch = jest.fn();

    const Ctor = Vue.extend(Container);
    const vm = new Ctor({
      store: mockedStore,
    }).$mount();

    vm.saveBackground([1, 2]);

    it('should dispatch the action', () => {
      expect(store.default.dispatch).toBeCalledWith({
        type: 'postBoard',
        products: [1, 2],
        background: null,
        country: '',
      });
    });
  });
});

describe('lifecycle', () => {
  describe('created', () => {
    Container.maxFurnitures = 5;
    Container.created();

    it('should fill the furniture array', () => {
      expect(Container.furnitures.length).toBe(5);
      expect([...new Set(Container.furnitures)]).toEqual([
        { display: false, isInPlayground: false },
      ]);
    });
  });

  describe('beforeMount', () => {
    it('should call onOrientationChange', () => {
      const spy = jest.spyOn(window, 'matchMedia');
      Container.onOrientationChange = jest.fn();
      Container.beforeMount();

      expect(Container.onOrientationChange).toBeCalled();
      expect(spy.mock.calls).toEqual([['(max-width: 900px)'], ['(orientation: landscape)']]);
    });
  });

  describe('mounted', () => {
    Container.$set = jest.fn();
    Container.blockScrollRefresh = jest.fn();
    Container.mounted();

    it('should call getLanguage', () => {
      expect(store.default.dispatch.mock.calls[0]).toEqual(['getLanguage']);
    });

    it('should call fetchFurnitures', () => {
      expect(store.default.dispatch.mock.calls[1]).toEqual(['fetchFurnitures']);
    });

    it('should call $set', () => {
      expect(Container.$set).toBeCalledWith(Container, 'quality', 'hd');
    });

    it('should call blockScrollRefresh', () => {
      expect(Container.blockScrollRefresh).toBeCalled();
    });
  });

  describe('updated', () => {
    Container.landscape = true;
    Container.board = {
      id: 1,
    };
    Container.language = {
      baseUrl: 'baseurl',
    };

    Container.updated();

    it('should set pathname to well-done', () => {
      expect(window.location.pathname).toBe('baseurl/well-done/1');
    });
  });
});
