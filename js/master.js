var projectLink = document.querySelector('a[href="#projects"]')
var projects = document.querySelector('.projects')

projectLink.addEventListener('click', function(event) {
    event.preventDefault()
    projects.style.display == 'none' ? projects.style.display = 'block' : projects.style.display = 'none'
})
