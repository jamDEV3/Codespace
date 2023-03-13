function reverseString(name) {
    let letters = [];
    let length = name.length - 1;

    for(let i = length; i >= 0; i--) {
        letters.push(name[i]);
    }

return letters.join('');
}

console.log(reverseString("jamie"));

// ----------------------------------------------- //

let arr = [];

let reverseArray = arr => {
    let list = [];
    let length = arr.length - 1;

    for(let i = length; i >= 0; i--) {
        list.push(arr[i]);
    }

return list;
}

console.log(reverseArray([1,2,3,4,5,6,7,8,9,10]));
console.log(reverseArray(["I", "like", "Javascript"]));


// ----------------------------------------------- //

function mostExpensiveItem() {
    
    let inventory = 
    [
        { item: "irn bru", price: 3.25, stock: 50 },
        { item: "fanta", price: 3.98, stock: 45 },
        { item: "diet coke", price: 4.40, stock: 38 }, 
        { item: "7up", price: 3.99, stock: 42 }, 
    ];
    let maxPrice = 0;
    let invNum = 0;
    let length = inventory.length - 1;

    for(let i = 0; i < length ; i++) {
        if ((inventory[i].stock * inventory[i].price) > maxPrice)
        {
            maxPrice = inventory[i].stock * inventory[i].price;
            invNum = i;

        }
    }

    console.log(inventory[invNum]);
    console.log(maxPrice);
}

mostExpensiveItem()



     
