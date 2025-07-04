const oo = 'palindrome'
const isPalindrome = oo => {
  const y = oo.split('').reverse().join('')
  if (oo === y) {
    return `${oo} is a palindrome`
  } else {
    return `${oo} is not a palindrome`
  }
}

console.log(isPalindrome('dark'))
