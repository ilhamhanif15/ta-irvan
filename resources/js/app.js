import Calendar from 'tui-calendar'; /* ES6 */
import "tui-calendar/dist/tui-calendar.css";

// SWIPER CONFIGURATIONS
const SWIPER_SINGLE_CONFIG = {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.custom-swiper-button-next',
        prevEl: '.custom-swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
}

const SWIPER_COLUMNS_OPTIONS = {
    slidesPerView: 1,
    slidesPerColumn: 1,
    spaceBetween: 10,
    slidesPerColumnFill: 'row',
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    breakpoints: {
        640: {
          slidesPerView: 3,
          slidesPerColumn: 1,
          spaceBetween: 20,
        },
        // 768: {
        //   slidesPerView: 4,
        //   spaceBetween: 40,
        // },
        // 1024: {
        //   slidesPerView: 5,
        //   spaceBetween: 50,
        // },
    }
}

const SingleSwipers = new Swiper ('.swiper-container.single-swiper', SWIPER_SINGLE_CONFIG)
// const ColumnSwipers = new Swiper ('.swiper-container.columns-swiper', SWIPER_COLUMNS_OPTIONS)


/*------------------------------
|| MOBILE SIDEBAR FUNCTIONS
------------------------------*/

const _btnMenuBarEl = document.getElementById('_btnMenuBar')

const _sideNavBarEl = document.getElementById('_sideNavBar')
const _sideNavBarCloseBtnEl = document.getElementById('_sideNavBarCloseBtn')

_btnMenuBarEl?.addEventListener("click", openNav)
_sideNavBarCloseBtnEl?.addEventListener("click", () => window.history.back())

function toggleNav() {
    _sideNavBarEl.classList.toggle("w-0")
    _sideNavBarEl.classList.toggle("w-full")
}

function openNav() {
    toggleNav()
    window.location.hash = "#_mobilemenu"
}

window.addEventListener("hashchange", function(e){
    let oldHash = e.oldURL.split("#")[1] ?? ''
    let newHash = e.newURL.split("#")[1] ?? ''

    if(oldHash === '_mobilemenu') {
        toggleNav()
    }
})

Array(...document.getElementsByClassName('dropdown-menu-mobile-btn')).forEach(element => {
    element.addEventListener('click', function(e) {
        this.nextElementSibling.children[0].classList.toggle("max-h-0")
        this.nextElementSibling.children[0].classList.toggle("max-h-screen")
    })
})

/*------------------------------
|| TUI CALENDAR
------------------------------*/

if (document.getElementById('calendar')) {
    var cal = new Calendar('#calendar', {
        defaultView: 'month', // monthly view option
        taskView: true,
        usageStatistics: false
    });
}

/*------------------------------
|| Datatable
------------------------------*/
if (document.getElementById('datatable')) {
    $('#datatable').DataTable({
        "order": [],
        "aLengthMenu": [100]
    });
}

if (document.getElementsByClassName('datatable').length > 0) {
    $('.datatable').DataTable();
}

/*------------------------------
|| Tree Views
------------------------------*/
var toggler = document.getElementsByClassName("caret");
var i;

for (i = 0; i < toggler.length; i++) {
  toggler[i].addEventListener("click", function() {
    this.parentElement.querySelector(".nested").classList.toggle("active");
    this.classList.toggle("caret-down");
  });
}