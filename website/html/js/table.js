// fill the table on the about page
var table = document.getElementById('about_table');
var table_data = [
  { company: 'Philips', contact: 'Daan van der Munnik', country: 'Netherlands' },
  { company: 'Samsung', contact: 'Jane Doe', country: 'South Korea' },
  { company: 'Apple', contact: 'Jack Doe', country: 'United States' }
];

table_data.forEach((item) => {
  var row = document.createElement('tr');
  row.innerHTML = '<td>' + item.company + '</td><td>' + item.contact + '</td><td>' + item.country + '</td>';
  table.appendChild(row);
});
