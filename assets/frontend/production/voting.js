var voting =
/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};

/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {

/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;

/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};

/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;

/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}


/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;

/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;

/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";

/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ function(module, exports, __webpack_require__) {

	module.exports = __webpack_require__(1);


/***/ },
/* 1 */
/***/ function(module, exports) {

	/**
	 * Created by Khaydarov on 11.12.16.
	 */

	var storage = (function(storage){

	    storage.vote = null;

	    storage.voteServer = null;

	    storage.resetServer = null;

	    storage.setVote = function(el) {
	        storage.vote = el.dataset.pk;
	    };

	    storage.saveValue = function() {

	        if (localStorage.getItem('vote')) {
				//swal('Вы уже голосовали!');
	            alert('Вы уже участвовали в голосовании!');
	            return;
	        }

	        $.ajax({
	            url : storage.voteServer,
	            type : "POST",
	            crossDomain : true,
	            data: {
	                vote : storage.vote
	            },
	            success : function(result) {
	                localStorage.setItem('vote', storage.vote);
					//swal("Thank you for voting!");
	                alert('Благодарим вас за участие в голосовании!!')
	                //alert("Спасибо за голосование!");
	                window.location.reload();
	            },
	            error : function(error) {
					//swal("Something goes wrong! Please, try again!");
	                alert('Извините, возникли проблемы с голосованием. Попробуйте снова. Возможно вы нажали не туда.');
	            }
	        });
	    };

	    storage.resetValue = function() {

	        if (!localStorage.getItem('vote')) {
				//swal("You have not vote! Please, make you choice!");
	            alert('Вы еще не голосовали');
	            return;
	        }

	        $.ajax({
	            url : storage.resetServer,
	            type : "POST",
	            crossDomain: true,
	            data : {
	                vote : localStorage.getItem('vote')
	            },
	            success : function (result) {
	                localStorage.removeItem('vote');
					//swal("Your vote has been canceled!");
					//alert("Your vote has been canceled!");
					alert('Ваш голос был отменен!');
					window.location.reload();
	                
	            },
	            error : function () {
					//swal("Something goes wrong! Please, try again!");
	                alert('Извините, возникли проблемы с голосованием. Попробуйте снова. Возможно вы нажали не туда.');
	            }
	        });

	    };

	    var ajax = function (data) {

	        if (!data || !data.url) {
	            return;
	        }

	        var XMLHTTP = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP"),
	            success_function = function success_function() {},
	            params = '',
	            obj;

	        data.async = true;
	        data.type = data.type || 'GET';
	        data.data = data.data || '';
	        data['content-type'] = data['content-type'] || 'application/json; charset=utf-8';
	        success_function = data.success || success_function;

	        if (data.type == 'GET' && data.data) {

	            data.url = /\?/.test(data.url) ? data.url + '&' + data.data : data.url + '?' + data.data;
	        } else {

	            for (obj in data.data) {
	                params += obj + '=' + encodeURIComponent(data.data[obj]) + '&';
	            }
	        }

	        if (data.withCredentials) {
	            XMLHTTP.withCredentials = true;
	        }

	        if (data.beforeSend && typeof data.beforeSend == 'function') {
	            data.beforeSend.call();
	        }

	        XMLHTTP.open(data.type, data.url, data.async);
	        XMLHTTP.setRequestHeader("X-Requested-With", "XMLHttpRequest");
	        XMLHTTP.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	        XMLHTTP.onreadystatechange = function () {
	            if (XMLHTTP.readyState == 4 && XMLHTTP.status == 200) {
	                success_function(XMLHTTP.responseText);
	            }
	        };

	        XMLHTTP.send(params);
	    };

	    return storage;

	})({});

	module.exports = storage;


/***/ }
/******/ ]);
