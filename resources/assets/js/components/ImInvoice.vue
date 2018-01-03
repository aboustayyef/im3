<template>
    <div>
        <p>MessageLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <hr>
        <h3 class="title is-4">Customer: {{invoicemaker.customer.name}}</h3>
        <h4 class="subtitle is-4">Address: {{invoicemaker.customer.address}}</h4>
        <hr>
        <h3 class="title is-4">Prepared By: {{invoicemaker.preparer.name}}</h3>
    </div>
</template>

<script>
    import invoicemaker from '../state.js';
    export default {
        data: function(){
            return {
                invoicemaker:invoicemaker
            }
        }
    }
</script>
