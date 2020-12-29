toNewYear()
setInterval(toNewYear, 1000)

function toNewYear() {
  const now = new Date()
  const date = new Date(2021, 0,
      1 - now.getDay(),
      0 - now.getHours(),
      0 - now.getMinutes(),
      0 - now.getSeconds())
  const days = parseInt(date.getDay() * 24)
  const hours =  date.getHours() + days
  const minutes =  date.getMinutes()
  const second =  date.getSeconds()
  if (now.getFullYear() === 2021) {
    window.location.href = 'http://www.tigran.site/HappyNewYear/'
  }
  $('.time').text(`${intF(hours)}:${intF(minutes)}:${intF(second)}`)
}
function intF(n) {
  return (n).toLocaleString(undefined, {minimumIntegerDigits: 2})
}
