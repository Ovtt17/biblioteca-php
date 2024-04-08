document.getElementById('search').addEventListener('click', function (e) {
  e.preventDefault();
  let searchType = document.getElementById('searchType').value;
  let searchValue = document.getElementById('searchInput').value;

  fetch(`php/search.php?searchType=${searchType}&searchValue=${searchValue}`, {
    method: 'GET'
  }).then(response => response.text())
    .then(data => {
      console.log(data);
      document.querySelector('tbody').innerHTML = data;
    })
    .catch(error => console.error('Error:', error));
});
