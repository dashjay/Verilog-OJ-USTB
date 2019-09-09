import api from '@/pages/api'
import storage from '@/utils/storage'


const state = {
  profile: {}
};

// 常量的getter
const getters = {
  user: state => state.profile || {},
  profile: state => state.profile,
  isAuthenticated: (state, getters) => {
    //巧妙获得bool值
    return !!getters.user.id
  },
  // isAdminRole: (state, getters) => {
  //     return getters.user.admin_type === USER_TYPE.ADMIN ||
  //         getters.user.admin_type === USER_TYPE.SUPER_ADMIN
  // },
  // isSuperAdmin: (state, getters) => {
  //     return getters.user.admin_type === USER_TYPE.SUPER_ADMIN
  // },
  // hasProblemPermission: (state, getters) => {
  //     return getters.user.problem_permission !== PROBLEM_PERMISSION.NONE
  // }
};

const mutations = {
  updateProfile(state, profile) {
    state.profile = profile;
    // TODO 未来在这里处理i18n的问题
    // if (profile.language) {
    //     i18n.locale = profile.language
    // }
  }
};

const actions = {
  //user actions 中的获取用户信息的
  getProfile({commit}) {
    //调用api中的请求获取用户信息
    api.getUserInfo().then(res => {
      if (res.data.status) {
        // 获取成功...
        commit('updateProfile', res.data.object);
      } else {
        // 获取失败...
        console.log(res.data.msg);
      }
    })
  },
  // 清除用户信息的操作
  clearProfile({commit}) {
    api.Logout().then(response => {
      console.log('注销成功' + response.data.msg)
    }).catch(error => {
      console.log('注销成功' + error)
    });
    commit('updateProfile', {});
    storage.clear()
  },
};

export default {
  state,
  getters,
  actions,
  mutations
}
