<template>
    <div class="im-sidebar">
        <div class="field">
            <label class="label">Invoice Prepared By</label>
            <div class="control">
                <input class="input" v-model="invoicemaker.preparer.name" type="text" placeholder="Blue Gallery Staff"></div>
        </div>
        <div class="field">
            <label class="label">Customer Name</label>
            <div class="control">
                <input class="input" v-model="invoicemaker.customer.name" type="text" placeholder="Customer name"></div>
        </div>

        <div class="field">
            <label class="label">Customer Address</label>
            <div class="control">
                <textarea class="textarea" v-model="invoicemaker.customer.address" placeholder="Address"></textarea>
            </div>
        </div>

        <hr>
        <h3 class="title is-4">Discount(optional)</h3>

        <div class="field has-addons">
            <p class="control">
                <input id="discount" v-model="invoicemaker.discount.amount" class="input" type="text" placeholder="Discount"></p>
            <p class="control">
                <span class="select">
                    <select v-model="invoicemaker.discount.type" @change="clearDiscount()">
                        <option :value="'percentage'">%</option>
                        <option :value="'GHS'">GHS</option>
                    </select>
                </span>
            </p>
        </div>

    </div>
</template>

<script>
    import invoicemaker from '../state.js';
    export default 
    {
    data: function(){
        return {
            filter_keyword: '',
            invoicemaker:invoicemaker,
        }
      },
    methods: 
    {
        clearDiscount: function()
        {
            invoicemaker.discount.amount = 0.00;
            document.getElementById("discount").focus();
        }
    }
}
</script>