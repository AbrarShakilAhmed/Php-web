let obj = {
  kids: {
    name: 'abrar',
    age: 45,
    addr: {
      city: 'chu',
      print() {
        console.log(this) // Will log the `addr` object
      },
    },
  },
  ages: 234, // Correct the semicolon to a comma here
}

obj.kids.addr.print.call(kids) // This will log the `addr` object
