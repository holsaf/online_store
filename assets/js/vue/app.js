/*const home ={
    template: '#homepage'
}

const about={
    template: '#about'
}*/

//const router = new VueRouter({
  //  base: 'blogigniter/adminVue',
   // routes: [{path:'/', component: Prueba}],
  //  linkActiveClass: 'active',
  //  linkExactActiveClass: 'current'
//});

const app = new Vue({
   
    el:"#app",
    data:{ totalcompra: 0  , cantidadCar: 0, productos:[], car:[]},
    created() {
        this.mostrarProductos()
        console.log(this.productos)
        
    },
    methods: {
        mostrarProductos() {
            fetch('http://localhost/blogigniter/Product/recuperarProductos')
                    .then(response => response.json())
                    .then(res => (this.productos = res))
            
        },
        
        addCart(product){
            const checkInCar = this.car.filter((item)=> item.UPC == product.UPC)[0];
            console.log(product);
            if (checkInCar!= undefined)
            {
                checkInCar.amount++;
                this.cantidadCar++;
                this.totalcompra += parseInt(checkInCar.product_price)  ;  
            } 
            else
            {
                productInCar={UPC:product.UPC,
                              product_name: product.product_name,
                              product_price: product.product_price,
                              product_category_id: product.product_category_id,
                              product_image: product.product_image,
                              type_image: product.type_image, 
                              amount: 1};
                this.car.push(productInCar);
                this.cantidadCar++;
                this.totalcompra += parseInt(product.product_price);
            }
            
            
            
            
        },
        
        removeProducto(product){
            const checkInCar = this.car.filter((item)=> item.UPC == product.UPC)
            if(product.amount>1)
            {
                checkInCar.amount--;
                this.cantidadCar--;
                this.totalcompra -= parseInt(product.product_price);
            }
            else(product.amount==1) 
            {
                this.car.splice(this.car.indexOf(product.UPC),1);
                this.cantidadCar--;
                this.totalcompra -= parseInt(product.product_price);
            } 
        }
    }
    
    
});

