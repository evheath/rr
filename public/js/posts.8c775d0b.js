"use strict";(self["webpackChunkfrontend"]=self["webpackChunkfrontend"]||[]).push([[287],{7721:function(t,s,n){n.r(s),n.d(s,{default:function(){return w}});var e=n(3396),o=n(7139);const a={class:"posts"},r=(0,e._)("h1",null,"Here are all the posts:",-1);function i(t,s,n,i,u,d){const p=(0,e.up)("router-link");return(0,e.wg)(),(0,e.iD)("div",a,[r,((0,e.wg)(!0),(0,e.iD)(e.HY,null,(0,e.Ko)(t.posts,(t=>((0,e.wg)(),(0,e.iD)("p",{key:t.id},[(0,e.Uk)(" #"+(0,o.zw)(t.id)+": ",1),(0,e.Wm)(p,{to:{name:"post",params:{id:t.id}}},{default:(0,e.w5)((()=>[(0,e.Uk)((0,o.zw)(t.title),1)])),_:2},1032,["to"])])))),128))])}var u=n(6265),d=n.n(u),p={name:"PostsView",components:{},async mounted(){const t=await d().get("/posts.json");this.posts=t.data},data:()=>({posts:[]})},c=n(89);const l=(0,c.Z)(p,[["render",i]]);var w=l}}]);
//# sourceMappingURL=posts.8c775d0b.js.map