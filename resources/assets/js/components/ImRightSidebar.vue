<template>
    <div class="im-sidebar">
        <div class="field">
        <label class="label">Invoice Prepared By</label>
        <div class="control">
        <input class="input" v-model="invoicemaker.preparer.name" type="text" placeholder="Blue Gallery Staff">
        </div>
        </div>
        <div class="field">
        <label class="label">Customer Name</label>
        <div class="control">
        <input class="input" v-model="invoicemaker.customer.name" type="text" placeholder="Customer name">
        </div>
        </div>


        <div class="field">
        <label class="label">Customer Address</label>
        <div class="control">
        <textarea class="textarea" v-model="invoicemaker.customer.address" placeholder="Address"></textarea>
        </div>
        </div>
        
        <hr>
        <h3 class="title is-4">Discount(optional)</h3>

        <div v-if="invoicemaker.discount.amount == 0">
            <label class="label">By Percentage</label>
            <div class="field has-addons">
              <p class="control">
                <input v-model="invoicemaker.discount.percentage" class="input" type="text">
              </p>
              <p class="control">
                <a class="button is-static">
                  %
                </a>
              </p>
            </div>
        </div>

        <div class="field" v-if="invoicemaker.discount.percentage == 0">
            <label class="label">By Amount</label>
            <div class="control">
                <input class="input" v-model="invoicemaker.discount.amount" type="text">
            </div>
        </div>

        <button class="button"@click="clearDiscount()">Clear</button>

    </div>
</template>

<script>
    import invoicemaker from '../state.js';
    export default {
    data: function(){
        return {
            filter_keyword: '',
            invoicemaker:invoicemaker,
        }
      },
    methods: {
        clearDiscount: function(){
            invoicemaker.discount.amount = 0.00;
            invoicemaker.discount.percentage = 0.00;
        }
        }
    }
</script>
