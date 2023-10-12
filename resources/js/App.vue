<template>
    <Home />
    <LinePic />
    <Gallery />
    <Test />
    <Product />
    <CheckOut />
    <Footer />
</template>

<script>
import Home from './components/Home.vue';
import Product from './components/Product.vue';
import CheckOut from './components/CheckOut.vue';
import LinePic from './components/Linepic.vue';
import Test from './components/Test.vue';
import Gallery from './components/Gallery.vue';
import Footer from './components/Footer.vue';

export default {
    components: {
    Home, Product, CheckOut, LinePic,
    Gallery, Test, Footer
},
}
</script>
