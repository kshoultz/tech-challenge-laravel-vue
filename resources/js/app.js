require('./bootstrap');

const mwiApp = Vue.createApp({
    data() {
        return {
            title: 'Midwestern Interactive'
        };
    }, 
    computed: {
        // These will be called differently than methods.
        fullName() {
            // This will be used like a property, not called like a method.
            // You will call it without parenthesis.
            // Only use this for outputing something to the page.
            console.log('Running computed value for fullName');
            if (this.myName === '') { return; }
            return this.myName + " Shoultz";
        }
    },
    methods: {
        submitForm(event) {
            alert('Submitted!');
        },
    }
});

if (document.getElementById('#user-goal')) {
    mwiApp.mount('#mwi-app');
}