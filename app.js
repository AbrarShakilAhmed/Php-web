let arr = [13, 35, 3253, 53, 453, 5, 34, 5, 34, 5]

arr.forEach((e, i) => (arr[i] = Math.round(e / 2)))

console.log(arr)
