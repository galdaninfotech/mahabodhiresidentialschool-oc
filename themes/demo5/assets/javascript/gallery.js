// @ts-nocheck
//-------------------------------------------------------------------------------------
//
// THIS FILE IS NOT A PART OF THE PLUGIN, IT'S ONLY FOR THE DEMO
//
//-------------------------------------------------------------------------------------
!(function(){
    'use strict';

	var numOfImages = window.location.search ? parseInt(window.location.search.match(/\d+$/)[0]) : 70,
		gallery = $('#gallery'),
		videos = [
			// {
			// 	title: "PEOPLE ARE AWESOME 2014",
			// 	url: "https://www.youtube.com/embed/LVn8ei8d4iU",
			// 	thumb: "http://img.youtube.com/vi/LVn8ei8d4iU/0.jpg"
			// },

		],
		images = [
			{
				title: "First Bg Image",
				url: "http://ladakhwebhost.in/testsite112mimc/themes/demo5/assets/images/gallery/gallery1.jpg",
				thumb: "http://ladakhwebhost.in/testsite112mimc/themes/demo5/assets/images/gallery/gallery1.jpg"
			},
			{
				title: "Second Bg Image",
				url: "http://ladakhwebhost.in/testsite112mimc/themes/demo5/assets/images/gallery/gallery2.jpg",
				thumb: "http://ladakhwebhost.in/testsite112mimc/themes/demo5/assets/images/gallery/gallery2.jpg"
			},
			{
				title: "Third Bg Image",
				url: "http://ladakhwebhost.in/testsite112mimc/themes/demo5/assets/images/gallery/gallery3.jpg",
				thumb: "http://ladakhwebhost.in/testsite112mimc/themes/demo5/assets/images/gallery/gallery3.jpg"
			},
			{
				title: "Third Bg Image",
				url: "http://ladakhwebhost.in/testsite112mimc/themes/demo5/assets/images/gallery/gallery3.jpg",
				thumb: "http://ladakhwebhost.in/testsite112mimc/themes/demo5/assets/images/gallery/gallery3.jpg"
			},
			{
				title: "Third Bg Image",
				url: "http://ladakhwebhost.in/testsite112mimc/themes/demo5/assets/images/gallery/gallery4.jpg",
				thumb: "http://ladakhwebhost.in/testsite112mimc/themes/demo5/assets/images/gallery/gallery4.jpg"
			},
			{
				title: "Third Bg Image",
				url: "http://ladakhwebhost.in/testsite112mimc/themes/demo5/assets/images/gallery/gallery5.jpg",
				thumb: "http://ladakhwebhost.in/testsite112mimc/themes/demo5/assets/images/gallery/gallery5.jpg"
			},
			{
				title: "Third Bg Image",
				url: "http://ladakhwebhost.in/testsite112mimc/themes/demo5/assets/images/gallery/gallery6.jpg",
				thumb: "http://ladakhwebhost.in/testsite112mimc/themes/demo5/assets/images/gallery/gallery6.jpg"
			},
			{
				title: "Third Bg Image",
				url: "http://ladakhwebhost.in/testsite112mimc/themes/demo5/assets/images/gallery/gallery7.jpg",
				thumb: "http://ladakhwebhost.in/testsite112mimc/themes/demo5/assets/images/gallery/gallery7.jpg"
			},
			{
				title: "Third Bg Image",
				url: "http://ladakhwebhost.in/testsite112mimc/themes/demo5/assets/images/gallery/gallery8.jpg",
				thumb: "http://ladakhwebhost.in/testsite112mimc/themes/demo5/assets/images/gallery/gallery8.jpg"
			},
			{
				title: "Third Bg Image",
				url: "http://ladakhwebhost.in/testsite112mimc/themes/demo5/assets/images/gallery/gallery9.jpg",
				thumb: "http://ladakhwebhost.in/testsite112mimc/themes/demo5/assets/images/gallery/gallery9.jpg"
			},
			{
				title: "Third Bg Image",
				url: "http://ladakhwebhost.in/testsite112mimc/themes/demo5/assets/images/gallery/gallery10.jpg",
				thumb: "http://ladakhwebhost.in/testsite112mimc/themes/demo5/assets/images/gallery/gallery10.jpg"
			},
			{
				title: "Third Bg Image",
				url: "http://ladakhwebhost.in/testsite112mimc/themes/demo5/assets/images/gallery/gallery11.jpg",
				thumb: "http://ladakhwebhost.in/testsite112mimc/themes/demo5/assets/images/gallery/gallery11.jpg"
			},
			{
				title: "Third Bg Image",
				url: "http://ladakhwebhost.in/testsite112mimc/themes/demo5/assets/images/gallery/gallery12.jpg",
				thumb: "http://ladakhwebhost.in/testsite112mimc/themes/demo5/assets/images/gallery/gallery12.jpg"
			}
		];

		
		
		var loadedIndex = 1, isVideo;
		
        $.each( images, function(index, photo){
			isVideo = photo.thumb ? true : false;
			// http://www.flickr.com/services/api/misc.urls.html
            var url = 'http://farm' + photo.farm + '.static.flickr.com/' + photo.server + '/' + photo.id + '_' + photo.secret,
				img = document.createElement('img');
			
			// lazy show the photos one by one
			img.onload = function(e){
				img.onload = null;
				
				var link = document.createElement('a'),
					li = document.createElement('li');
					
				link.href = this.largeUrl;

				link.appendChild(this);
				if( this.isVideo ){
					link.rel = 'video';
					li.className = 'video'
				}
				li.appendChild(link);
				gallery[0].appendChild(li);
			
				setTimeout( function(){ 
					$(li).addClass('loaded');
				}, 25*loadedIndex++);
			};
			
			img['largeUrl'] = isVideo ? photo.url : url + '_b.jpg';
			img['isVideo'] = isVideo;
			img.src = isVideo ? photo.thumb : url + '_t.jpg';
			img.title = photo.title;
        });

		// finally, initialize photobox on all retrieved images
		$('#gallery').photobox('a', { thumbs:true, loop:false }, callback);
		// using setTimeout to make sure all images were in the DOM, before the history.load() function is looking them up to match the url hash
		setTimeout(window._photobox.history.load, 2000);
		function callback(){
			console.log('callback for loaded content:', this);
		};
})();