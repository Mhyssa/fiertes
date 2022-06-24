const second = 1000
const minute = second * 60
const hour = minute * 60
const day = hour * 24
const countDown = new Date('July 02, 2022 14:00:00').getTime()

let x = setInterval(() => {
    let distance = countDown - new Date().getTime()
    document.getElementById('days').innerText = Math.floor(distance / (day))
    document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour))
    document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute))
    document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second)
    if (distance < 0) clearInterval(x)
}, second)