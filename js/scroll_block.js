'use strict'


let current_array = [];

let scroll_block = document.querySelectorAll('.scroll_block');
let choice_items = document.querySelectorAll('.scroll_block:first-child');
let item = document.querySelectorAll('li[data-item]');


for (let i = 0; i < scroll_block.length; i++) {

    let sub = scroll_block[i].querySelectorAll('[data-item]')

    for (let j = 0; j < scroll_block.length; j++) {
        if (j===i){
            sub[j].classList.add('current_item_background');
        }else {
            sub[j].classList.add('item_background');
        }

    }

}

document.addEventListener('click', function (ev) {

    let max = 2;

    if (ev.target.dataset.item) {
        console.log('test = ' + ev.target.dataset.item);
        let numOfItem = ev.target.dataset.item;

        let current_scroll_block = scroll_block[numOfItem];
        console.log('numOfItem = ' + numOfItem);

        current_scroll_block.classList.add('active-item');
        current_scroll_block.scrollIntoView({behavior: "smooth", block: "end"});

        if (current_array.includes(current_scroll_block) === false) {
            current_array.push(current_scroll_block);
        }

        if (current_array.length === max) {
            console.log('current_array.length = ' + current_array.length);
            current_array[0].classList.remove('active-item');
            current_array.shift();
            console.log('current_array.length = ' + current_array.length);
        }

    }
})


