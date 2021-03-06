
// Authentication
let Login = require('./components/auth/login.vue').default;
let Register = require('./components/auth/register.vue').default;
let forgetPass = require('./components/auth/forget.vue').default;
let logout = require('./components/auth/logout.vue').default;
// Home/Dashboard
let home = require('./components/home.vue').default;
// Employee
let storeEmployee = require('./components/employee/create.vue').default;
let employee = require('./components/employee/index.vue').default;
let editEmployee = require('./components/employee/edit.vue').default;
// Supplier
let storeSupplier = require('./components/supplier/create.vue').default;
let Supplier = require('./components/supplier/index.vue').default;
let editSupplier = require('./components/supplier/edit.vue').default;
// Category
let storecategory = require('./components/category/create.vue').default;
let category = require('./components/category/index.vue').default;
let editcategory = require('./components/category/edit.vue').default;
// Product
let storeproduct = require('./components/product/create.vue').default;
let product = require('./components/product/index.vue').default;
let editproduct = require('./components/product/edit.vue').default;
// Expense
let storeexpense = require('./components/expense/create.vue').default;
let expense = require('./components/expense/expense.vue').default;
let editexpense = require('./components/expense/edit.vue').default;
// Salary
let salary = require('./components/salary/all_employee.vue').default;
let paysalary = require('./components/salary/create.vue').default;
let allsalary = require('./components/salary/index.vue').default;
let viewsalary = require('./components/salary/view.vue').default;
let editsalary = require('./components/salary/edit.vue').default;
// Stocks
let editstock = require('./components/product/edit-stock.vue').default;
let stock = require('./components/product/stock.vue').default;
// Customers
let storeCustomer = require('./components/customer/create.vue').default;
let Customer = require('./components/customer/index.vue').default;
let editCustomer = require('./components/customer/edit.vue').default;
// Point of Sales
let pos = require('./components/pos/pointofsale.vue').default;
// Orders
let order = require('./components/order/order.vue').default;
let vieworder = require('./components/order/viewOrder.vue').default;
let searchorder = require('./components/order/search.vue').default;


export const routes = [
    // Authentication
    { path: '/', component: Login, name: '/' },   
    { path: '/register', component: Register, name: 'register' },   
    { path: '/forget', component: forgetPass, name: 'forget' },
    { path: '/logout', component: logout, name: 'logout' },
    // Home/Dashboard
    { path: '/home', component: home, name: 'home' },       
    // Empployee
    { path: '/store-employee', component: storeEmployee, name:'store-employee' },
    { path: '/employee', component: employee, name:'employee' },   
    { path: '/edit-employee/:id', component: editEmployee, name:'edit-employee' }, 
    // Supplier
    { path: '/store-supplier', component: storeSupplier, name:'store-supplier' },
    { path: '/supplier', component: Supplier, name:'supplier' },
    { path: '/edit-supplier/:id', component: editSupplier, name:'edit-supplier' },
    // Category
    { path: '/store-category', component: storecategory, name:'store-category' },
    { path: '/category', component: category, name:'category' },
    { path: '/edit-category/:id', component: editcategory, name:'edit-category' },
    // Product
    { path: '/store-product', component: storeproduct, name:'store-product' },
    { path: '/product', component: product, name:'product' },
    { path: '/edit-product/:id', component: editproduct, name:'edit-product' },
    // Expense
    { path: '/store-expense', component: storeexpense, name:'store-expense' },
    { path: '/expense', component: expense, name:'expense' },
    { path: '/edit-expense/:id', component: editexpense, name:'edit-expense' },
    // Salary
    { path: '/given-salary', component: salary, name:'given-salary' },
    { path: '/pay-salary/:id', component: paysalary, name:'pay-salary' },
    { path: '/salary', component: allsalary, name:'salary' },
    { path: '/view-salary/:id', component: viewsalary, name:'view-salary' },
    { path: '/edit-salary/:id', component: editsalary, name:'edit-salary' },
    // Stokcs
    { path: '/stock', component: stock , name:'stock' },
    { path: '/edit-stock/:id', component: editstock, name:'edit-stock' },
    // Customers
    { path: '/store-Customer', component: storeCustomer, name:'store-Customer' },
    { path: '/Customer', component: Customer, name:'Customer' },
    { path: '/edit-Customer/:id', component: editCustomer, name:'edit-Customer' },
    // Point of Sales
    { path: '/pos', component: pos, name:'pos' },
    // Order
    { path: '/order', component: order, name:'order' },
    { path: '/view-order/:id', component: vieworder, name:'view-order' },
    { path: '/searchorder', component: searchorder, name:'searchorder' },

]
