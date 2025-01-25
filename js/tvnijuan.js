function isTarget(element, selector){
	if(element.closest(selector)) return element.closest(selector)
	if(element.isEqualNode(document.querySelector(selector))) return element
	return false
}


function firstToEnd(par){
	const firstBtn = par.querySelector(".tvcat-btn:first-child")
	par.insertAdjacentHTML("beforeend", firstBtn.outerHTML)
	firstBtn.remove()
}

document.addEventListener("click", e => {
	const el  = e.target,
		streamScroll = isTarget(el, ".stream-scroll")

	if(streamScroll){
		const id = streamScroll.id,
			par = streamScroll.closest(".stream-list-wrapper").querySelector(".stream-list"),
			firstBtn = par.querySelector(".tvcat-btn:first-child"),
			lastBtn = par.querySelector(".tvcat-btn:last-child")
		if(id == "left"){
			par.insertAdjacentHTML("afterbegin", lastBtn.outerHTML)
			lastBtn.remove()
		}
		if(id == "right"){
			par.insertAdjacentHTML("beforeend", firstBtn.outerHTML)
			firstBtn.remove()
		}
	}


})

document.addEventListener("readystatechange", () => {
	if(document.readyState == "complete"){
		const player = document.getElementById("player"),
			vodSearchInp = document.querySelector("input#vod-search"),
			bgVideo = document.querySelector(".bg-video")
		if(bgVideo !== false) bgVideo.querySelector("video").play()
		if(vodSearchInp !== null){
			vodSearchInp.removeAttribute('disabled')
			document.querySelector(".vod-search").classList.remove("hidden")
		}

		if(player !== null){
			const videoWrapper = player.querySelector("video"),
				imgLogo = `<img src="assets/img/logo.png" class="player-logo" id="bottom-right" />` +
					`<img src="assets/img/logo.png" class="player-logo" id="top-left" />`

			videoWrapper.insertAdjacentHTML("beforebegin", imgLogo)
		}
		document.addEventListener("input", e => {
			const el = e.target,
				vodSearch = isTarget(el, "input#vod-search")
			if(vodSearch !== false){
				let val = vodSearch.value
				if(val != "" && val.trim() != "") val = val.toLowerCase().trim()
				searchVOD(val)
			}
		})
		


		function searchVOD(keyword){
			const VODNotFound = document.querySelector(".vod-not-found")
			document.querySelectorAll(".vod-list .vod").forEach(vod => {
				const name = vod.getAttribute("data-name").toLowerCase(),
					cast = vod.getAttribute("data-cast").toLowerCase()
				vod.classList.remove('hidden')
				if(name.search(new RegExp(keyword, "gi")) == -1 && cast.search(new RegExp(keyword, "gi")) == -1) vod.classList.add('hidden')
				if(keyword == "") vod.classList.remove('hidden')
			})
			if(document.querySelectorAll(`.vod-list .vod:not([class*="hidden"])`).length == 0){
				VODNotFound.querySelector("& > b").innerText = keyword
				VODNotFound.hidden = false
			}else{
				VODNotFound.hidden = true
			}

		}
	}
})
