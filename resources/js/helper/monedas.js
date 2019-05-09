// register
Vue.filter('formatPrice', function (value) {
    const number = (value/1).toFixed(2).replace('.', ',');
    return "$"+number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
});

const formatPrice = Vue.filter('formatPrice');

export { formatPrice };