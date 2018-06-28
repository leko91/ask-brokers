import Helpers from './helpers/index';
import Search from './search/index';
import Filter from './filter/index';
import Chart from 'chart.js';

var test = new Helpers();
var search = new Search();
var filter = new Filter();

var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["10:00", "12:00", "14:00", "16:00", "18:00"],
    datasets: [{
      data: [15, 19, 13, 15, 12, 13],
      label: 'Stock name',
      backgroundColor: 'rgba(0, 0, 0, 0)',
      borderColor: '#55676f',
      borderWidth: 2,
      borderCapStyle: 'square',
      borderJoinStyle: 'miter',
      lineTension: 0,
      pointRadius: 0,
      pointHitRadius: 10,
      pointHoverRadius: 2,
      pointHoverBackgroundColor: '#55676f',
    }]
  },
  options: {
    animationDuration: 150,
  }
});
