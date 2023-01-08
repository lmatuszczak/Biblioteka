/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/timer.js":
/*!*******************************!*\
  !*** ./resources/js/timer.js ***!
  \*******************************/
/***/ (() => {

eval("function odliczanie() {\n  var dzisiaj = new Date();\n  var godzina = dzisiaj.getHours();\n  if (godzina < 10) godzina = \"0\" + godzina;\n  var minuta = dzisiaj.getMinutes();\n  if (minuta < 10) minuta = \"0\" + minuta;\n  var sekunda = dzisiaj.getSeconds();\n  if (sekunda < 10) sekunda = \"0\" + sekunda;\n  document.getElementById(\"zegar\").innerHTML = godzina + \":\" + minuta + \":\" + sekunda;\n  setTimeout(\"odliczanie()\", 1000);\n}\n\nodliczanie();//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvdGltZXIuanMuanMiLCJuYW1lcyI6WyJvZGxpY3phbmllIiwiZHppc2lhaiIsIkRhdGUiLCJnb2R6aW5hIiwiZ2V0SG91cnMiLCJtaW51dGEiLCJnZXRNaW51dGVzIiwic2VrdW5kYSIsImdldFNlY29uZHMiLCJkb2N1bWVudCIsImdldEVsZW1lbnRCeUlkIiwiaW5uZXJIVE1MIiwic2V0VGltZW91dCJdLCJzb3VyY2VSb290IjoiIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2pzL3RpbWVyLmpzPzMzMGUiXSwic291cmNlc0NvbnRlbnQiOlsiZnVuY3Rpb24gb2RsaWN6YW5pZSgpXHJcblx0e1xyXG5cdFx0dmFyIGR6aXNpYWogPSBuZXcgRGF0ZSgpO1xyXG5cdFx0XHJcblx0XHR2YXIgZ29kemluYSA9IGR6aXNpYWouZ2V0SG91cnMoKTtcclxuXHRcdGlmIChnb2R6aW5hPDEwKSBnb2R6aW5hID0gXCIwXCIrZ29kemluYTtcclxuXHRcdFxyXG5cdFx0dmFyIG1pbnV0YSA9IGR6aXNpYWouZ2V0TWludXRlcygpO1xyXG5cdFx0aWYgKG1pbnV0YTwxMCkgbWludXRhID0gXCIwXCIrbWludXRhO1xyXG5cdFx0XHJcblx0XHR2YXIgc2VrdW5kYSA9IGR6aXNpYWouZ2V0U2Vjb25kcygpO1xyXG5cdFx0aWYgKHNla3VuZGE8MTApIHNla3VuZGEgPSBcIjBcIitzZWt1bmRhO1xyXG5cdFx0XHJcblx0XHRkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcInplZ2FyXCIpLmlubmVySFRNTCA9IGdvZHppbmErXCI6XCIrbWludXRhK1wiOlwiK3Nla3VuZGE7XHJcblx0XHQgXHJcblx0XHQgc2V0VGltZW91dChcIm9kbGljemFuaWUoKVwiLDEwMDApO1xyXG59XHJcbm9kbGljemFuaWUoKTsiXSwibWFwcGluZ3MiOiJBQUFBLFNBQVNBLFVBQVQsR0FDQztFQUNDLElBQUlDLE9BQU8sR0FBRyxJQUFJQyxJQUFKLEVBQWQ7RUFFQSxJQUFJQyxPQUFPLEdBQUdGLE9BQU8sQ0FBQ0csUUFBUixFQUFkO0VBQ0EsSUFBSUQsT0FBTyxHQUFDLEVBQVosRUFBZ0JBLE9BQU8sR0FBRyxNQUFJQSxPQUFkO0VBRWhCLElBQUlFLE1BQU0sR0FBR0osT0FBTyxDQUFDSyxVQUFSLEVBQWI7RUFDQSxJQUFJRCxNQUFNLEdBQUMsRUFBWCxFQUFlQSxNQUFNLEdBQUcsTUFBSUEsTUFBYjtFQUVmLElBQUlFLE9BQU8sR0FBR04sT0FBTyxDQUFDTyxVQUFSLEVBQWQ7RUFDQSxJQUFJRCxPQUFPLEdBQUMsRUFBWixFQUFnQkEsT0FBTyxHQUFHLE1BQUlBLE9BQWQ7RUFFaEJFLFFBQVEsQ0FBQ0MsY0FBVCxDQUF3QixPQUF4QixFQUFpQ0MsU0FBakMsR0FBNkNSLE9BQU8sR0FBQyxHQUFSLEdBQVlFLE1BQVosR0FBbUIsR0FBbkIsR0FBdUJFLE9BQXBFO0VBRUNLLFVBQVUsQ0FBQyxjQUFELEVBQWdCLElBQWhCLENBQVY7QUFDRjs7QUFDRFosVUFBVSJ9\n//# sourceURL=webpack-internal:///./resources/js/timer.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/timer.js"]();
/******/ 	
/******/ })()
;