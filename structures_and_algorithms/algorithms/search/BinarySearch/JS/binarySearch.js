// Binary Search O(log n)
const binarySearch = (array, element) => {
  let start = 0;
  let end = array.length - 1;
  let middle = Math.floor((start + end) / 2);

  while (array[middle] !== element && start <= end) {
    if (element < array[middle]) {
      end = middle - 1;
    } else {
      start = middle + 1;
    }
    middle = Math.floor((start + end) / 2);
  }

  return array[middle] == element ? middle : -1;
};

const array = [1, 3, 4, 6, 8, 10, 11, 12, 13, 15, 18, 19, 20, 21, 22, 24];

// Examples
console.log(binarySearch(array, 1));
console.log(binarySearch(array, 24));
console.log(binarySearch(array, 26));
console.log(binarySearch(array, 31));
