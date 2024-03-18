var JobGrid=Class.create();JobGrid.prototype={initialize:function(e,t){this._handlers=$A([]),this._portalID=e,this._inPreview=null,this._lastSearchInput=null,this._sortColumn="posted",this._sortDir="desc",this._lib=new Portal(e,t),this.addHandlers(),this.repop(),$PROT("searchButton")&&$PROT("searchButton").observe("click",this.search.bind(this)),$PROT("resetButton")&&$PROT("resetButton").observe("click",function(e){document.getElementById("keywords").value="",this.search(e).bind(this)}.bind(this)),$PROT("keywords")&&$PROT("keywords").observe("keyup",function(e){this._lastSearchInput=e.element(),e.keyCode==Event.KEY_RETURN?this.search({element:function(){return $PROT("searchButton")}}):e.keyCode==Event.KEY_ESC&&($PROT("keywords").clear(),this.search({element:function(){return $PROT("searchButton")}}))}.bind(this))},getCategoryOptions:function(){var e=$A([]);return $$PROT("input.categoryFilter").each(function(t){if(t.checked){var n=t.next("input").value,i=t.next("input",1).value;e.push($A([n,i]))}}.bind(this)),$$PROT("select.categorySelect").each(function(t){if(t.value.length>0&&t.next("input.categorySelectCategory")){var n=t.next("input.categorySelectCategory").value,i=t.value;e.push($A([n,i]))}}.bind(this)),e.toJSON()},repop:function(){$PROT("previewHint")&&$PROT("previewHint").show(),$PROT("searchFilter")&&$PROT("searchFilter").show(),$PROT("categories")&&$PROT("categories").show()},search:function(e){var t=e.element();null!==this._inPreview&&($PROT("previewJobContainer").hide(),$PROT("previewJobContainerPointer").hide(),this._inPreview=null),t.style.color="#999",t.disabled=!0,t.value=t.name,$PROT("searchButtonIndicator").show();var n=document.location.href.replace(/[?&]search=[^&?]*/,"");n=n.replace(/[?&]page=[^&?]*/,""),n=n+(-1==n.indexOf("?")?"?":"&")+"search="+encodeURIComponent($F("keywords").strip()),n=n.replace(/[?&]categories=[^&?]*/,""),n=n+"&categories="+encodeURIComponent(this.getCategoryOptions()),document.location.href=n},draw:function(e){this.stopHandlers(),$PROT("jobListingsContent").replace(e),this.addHandlers(),this.repop()},stopHandlers:function(){this._handlers.each(function(e){e.stopObserving()}.bind(this)),this._handlers=$A([])},addHandlers:function(){$$PROT("img.previewJob").each(function(e){e.show(),this._handlers.push(e),e.style.cursor="pointer",e.observe("click",this.previewJob.bind(this))}.bind(this)),$$PROT("th.sortingHeader").each(function(e){var t=e.down("a");t.observe("click",function(e){var t=e.element().previous("span").innerHTML;this._sortDir=t==this._sortColumn&&"desc"==this._sortDir?"asc":"desc",this._sortColumn=t;this._sortDir;this._lib.getResponse("a=getResults"+this.getExtraURL(),function(e){this.draw(e.grid)}.bind(this))}.bind(this)),this._handlers.push(t)}.bind(this))},getExtraURL:function(){var e="";return $PROT("subdomain")&&(e+="&subdomain="+encodeURIComponent($F("subdomain"))),$PROT("ref")&&(e+="&ref="+encodeURIComponent($F("ref"))),$PROT("categoryData")&&(e+="&categories="+encodeURIComponent($F("categoryData"))),$PROT("keywords")&&("undefined"!=typeof document.getElementById("keywords").value?e+="&search="+encodeURIComponent($F("keywords").strip()):"undefined"!=typeof $PROT("searchFilter").down("input")&&(e+="&search="+encodeURIComponent($PROT("searchFilter").down("input").value.strip()))),$PROT("filterCategory")&&(e+="&filterCategory="+encodeURIComponent($F("filterCategory"))),$PROT("filterOption")&&(e+="&filterOption="+encodeURIComponent($F("filterOption"))),e+="&sortColumn="+encodeURIComponent(this._sortColumn),e+="&sortDir="+encodeURIComponent(this._sortDir)},previewJob:function(e){var t=e.element(),n=parseInt(t.next("span").innerHTML);return this._inPreview==n?($PROT("previewJobContainer").hide(),$PROT("previewJobContainerPointer").hide(),void(this._inPreview=null)):(null!==this._inPreview&&$$PROT("a.closePreviewLink").each(function(e){e.stopObserving()}),void this._lib.getResponse("a=getJobPreview&jobOrderID="+n+this.getExtraURL(),function(e){var i=t.positionedOffset(),o=$PROT("previewJobContainer"),r=$PROT("previewJobContainerPointer");o&&(o.setStyle({left:i[0]-120+"px",top:i[1]+30+"px"}),o.update("&nbsp;"),o.show(),o.update(e.description)),r&&(r.setStyle({left:i[0]-7+"px",top:i[1]+14+"px"}),r.show()),$$PROT("a.closePreviewLink").each(function(e){e.observe("click",function(){o&&(o.update("&nbsp;"),o.hide()),r&&r.hide()}.bind(this))}.bind(this)),this._inPreview=n}.bind(this)))}},document.observe("dom:loaded",function(){if($PROT("portalID")){var e=parseInt($F("portalID")),t="yes"==$F("testMode");new JobGrid(e,t)}});