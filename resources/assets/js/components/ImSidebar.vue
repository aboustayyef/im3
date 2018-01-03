<template>
    <div class="im-sidebar">
        <button class="button is-primary">Upload New Data</button>
        <hr>
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


<table class="table is-fullwidth">
          <thead>
            <tr>
              <th>One</th>
              <th>Two</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Three</td>
              <td>Four</td>
            </tr>
            <tr>
              <td>Five</td>
              <td>Six</td>
            </tr>
            <tr>
              <td>Seven</td>
              <td>Eight</td>
            </tr>
            <tr>
              <td>Nine</td>
              <td>Ten</td>
            </tr>
            <tr>
              <td>Eleven</td>
              <td>Twelve</td>
            </tr>
          </tbody>
        </table>



    </div>
</template>

<script>
    import invoicemaker from '../state.js';
    export default {
        data: function(){
            return {
                invoicemaker:invoicemaker,
            }
        }
    }
</script>
