// alert("test");
const value = document.getElementById("str").value;

var csvArray = value.split(',');
console.log(csvArray);
var ctx = document.getElementById('mychart');
var myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: csvArray,
    datasets: [{
      label: 'Red',
      data: [30, 25, 10, 5, 25, 30, 20],
      borderColor: '#f88',
    },  
    {
      label: 'Blue',
      data: [30, 25, 10, 5, 25, 30, 20],
      borderColor: '#48f',
    }],
  },
  options: {
    y: {
      min: 0,
      max: 250,
    },
  },
});
