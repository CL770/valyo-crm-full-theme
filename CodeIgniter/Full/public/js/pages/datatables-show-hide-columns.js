document.addEventListener("DOMContentLoaded",function(){if(t=document.getElementById("show-hide-column")){let n=new DataTable(t,{responsive:!0,dom:"<'d-md-flex justify-content-between align-items-center mt-2 mb-3'<'columnToggleWrapper'B>f>rt<'d-md-flex justify-content-between align-items-center mt-2'lp>",language:{paginate:{first:'<i class="ti ti-chevrons-left"></i>',previous:'<i class="ti ti-chevron-left"></i>',next:'<i class="ti ti-chevron-right"></i>',last:'<i class="ti ti-chevrons-right"></i>'}}});var e,t=["Company","Symbol","Price","Change","Volume","Market Cap","Rating","Status"],o=document.querySelector(".columnToggleWrapper");o&&((e=document.createElement("div")).className="dropdown",e.innerHTML=`
        <button class="btn btn-sm btn-secondary" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside">
            Show/Hide Columns
        </button>
        <ul class="dropdown-menu" id="columnToggleMenu">
            ${t.map((e,t)=>`
                <li class="dropdown-item">
                    <div class="form-check">
                        <input class="form-check-input form-check-input-light fs-14 mt-0 toggle-vis" 
                               type="checkbox" data-column="${t}" id="colToggle${t}" checked>
                        <label class="form-check-label fw-medium" for="colToggle${t}">
                            ${e}
                        </label>
                    </div>
                </li>
            `).join("")}
        </ul>
    `,o.appendChild(e),document.getElementById("columnToggleMenu").addEventListener("change",function(e){var t;e.target.classList.contains("toggle-vis")&&(t=parseInt(e.target.dataset.column,10),n.column(t).visible(e.target.checked))}))}});