import{n as w,y as O,a as h,P as l}from"./main-7307f41e.js";import{r as b,a as p}from"./chartjs-607bc94d.js";const x=b.forwardRef(({bsPrefix:e,className:n,striped:r,bordered:t,borderless:o,hover:a,size:i,variant:d,responsive:f,...v},m)=>{const s=w(e,"table"),$=O(n,s,d&&`${s}-${d}`,i&&`${s}-${i}`,r&&`${s}-${typeof r=="string"?`striped-${r}`:"striped"}`,t&&`${s}-bordered`,o&&`${s}-borderless`,a&&`${s}-hover`),g=h("table",{...v,className:$,ref:m});if(f){let c=`${s}-responsive`;return typeof f=="string"&&(c=`${c}-${f}`),h("div",{className:c,children:g})}return g}),k=x;function u(){return u=Object.assign||function(e){for(var n=1;n<arguments.length;n++){var r=arguments[n];for(var t in r)Object.prototype.hasOwnProperty.call(r,t)&&(e[t]=r[t])}return e},u.apply(this,arguments)}function j(e,n){if(e==null)return{};var r=P(e,n),t,o;if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(e);for(o=0;o<a.length;o++)t=a[o],!(n.indexOf(t)>=0)&&Object.prototype.propertyIsEnumerable.call(e,t)&&(r[t]=e[t])}return r}function P(e,n){if(e==null)return{};var r={},t=Object.keys(e),o,a;for(a=0;a<t.length;a++)o=t[a],!(n.indexOf(o)>=0)&&(r[o]=e[o]);return r}var y=b.forwardRef(function(e,n){var r=e.color,t=r===void 0?"currentColor":r,o=e.size,a=o===void 0?24:o,i=j(e,["color","size"]);return p.createElement("svg",u({ref:n,xmlns:"http://www.w3.org/2000/svg",width:a,height:a,viewBox:"0 0 24 24",fill:"none",stroke:t,strokeWidth:"2",strokeLinecap:"round",strokeLinejoin:"round"},i),p.createElement("rect",{x:"9",y:"9",width:"13",height:"13",rx:"2",ry:"2"}),p.createElement("path",{d:"M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"}))});y.propTypes={color:l.string,size:l.oneOfType([l.string,l.number])};y.displayName="Copy";const E=y;export{E as C,k as T};
