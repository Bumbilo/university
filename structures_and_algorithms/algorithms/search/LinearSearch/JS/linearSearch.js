// Linear search O(n)
const linearSearch = (arr, value) => {
  for (let i = 0; i < arr.length; i++) {
    if (arr[i] === value) {
      return i;
    }
  }
  return -1;
};

// Examples
console.log('Index of 2 is:', linearSearch([34, 56, 1, 2, 13, 456, 76], 2));
console.log('Index of 76 is:', linearSearch([34, 56, 1, 2, 13, 456, 76], 76));
console.log('Index of 34 is:', linearSearch([34, 56, 1, 2, 13, 456, 76], 34));
console.log('Index of 1001 is:', linearSearch([34, 56, 1, 2, 13, 456, 76], 1001));
