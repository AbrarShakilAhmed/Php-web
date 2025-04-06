let arr = [13, 35, 3253, 53, 453, 5, 34, 5, 34, 5]

arr.forEach((e, i) => (arr[i] = Math.round(e / 2)))

console.log(arr)

let obj = [
  { name: 'abrar', age: 34 },
  { name: 'abrar', age: 34 },
  { name: 'abrar', age: 34 },
  { name: 'abrar', age: 34 },
  { name: 'abrar', age: 34 },
]

obj.forEach((e) => {
  return (e.age = e.age / 2)
})

console.log(obj)

let newObj = obj.map((e) => {
  return {
    ...e,
    age: e.age / 2,
  }
})

console.log(newObj)

const app = ['A', ' ', 'B']

const sen = app.reduce((acc, i) => acc + i)

console.log(sen)
