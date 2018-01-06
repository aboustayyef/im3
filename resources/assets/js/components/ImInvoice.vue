<template>
    <div class="section">
        <div id="output">
            <div>
                <div id="output-header">
                    <div class="level">
                        <div class="level-left">
                            <div>
                                <h3 class="title is-3">Quote</h3>
                                <h4 class="subtitle is-4">{{(new Date()).toDateString()}}</h4>
                            </div>
                        </div>
                        <div class="level-right">
                            <img src ="/img/logo.svg">
                        </div>
                    </div>
                    
                    <h3 class="title is-5">Customer: {{invoicemaker.customer.name}}</h3>
                    <h4 class="subtitle is-6">Address: {{invoicemaker.customer.address}}</h4>
                </div>
                <hr>
                <div id="output-content">
                    <table class="table is-fullwidth is-striped" v-if="added_goods.length > 0">
                        <thead>
                            <tr>
                                <th>Code</th>
                                <th>Brand</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-if="invoicemaker.loaded" v-for="item in added_goods">
                              <td>{{item.Code}}</td>
                              <td>{{item.Brand}}</td>
                              <td>{{item.Name}}</td>
                              <td>{{item.PriceEx | currency}}</td>
                              <td>{{item.AddedToInvoice}}</td>
                              <td>{{item.PriceEx * item.AddedToInvoice | currency}}</td>
                              <td><button @click="remove(item)" class="button is-danger">Remove</button></td>
                            </tr>
                        </tbody>
                        <p>Note: All prices are in GH¢</p>
                    </table>
                    <div v-else>
                        <p>Items added will show up here</p>
                    </div>
                </div>
            </div>
            
            <div id="output-footer">
                <div class="level">
                    <div class="level-left">
                        <div>
                            <h3 class="title is-5">Prepared By: {{invoicemaker.preparer.name}}</h3>
                            <p>
                                Blue Gallery Home And Office <br>
                            +233 303 300 121 <br>
                                bluegallery.com.gh
                            </p>
                        </div>

                    </div>
                    <div class="level-right">Totals go here</div>
                </div>
                <hr>
                <div id="contact-info">
                    <p>PAYMENT CONDITIONS<br>
                Cheques are payable to : TARZAN ENTERPRISE LTD.<br>
                Bank transfer : Bank : CAL BANK LTD. | Account name: Tarzan Enterprise Ltd. | Account number: 061018379022 | Branch sort
                code: 140102 | Swift code: ACCCGHAC | Account currency: Ghana Cedi</p>
                <p>EXEMPTED FROM 3% WITHHOLDING TAX<br>
                TIN: C0003222233</p>
                <p>Main showroom: TEMA, Aflao road, facing shell | Accra store: Maxmart 37 Mall, 1st floor</p>
                </div>
            </div>
        </div>

    </div>
</template>
    </div>
</template>

<script>
    import invoicemaker from '../state.js';
    export default {
        data: function(){
            return {
                invoicemaker:invoicemaker
            }
        },
        methods: {
            remove: function(item){
                item.AddedToInvoice = 0;
            }
        },
        computed: {
          added_goods: function(){
            return this.invoicemaker.goods.filter((good) => 
                  good.AddedToInvoice > 0
            );
          }
        },
        filters: {
          currency: function (value) {
            return (value * 1.00).toLocaleString('en') ;
          }
        }
    }
</script>
