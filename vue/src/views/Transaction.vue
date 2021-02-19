<template>
    <v-container fluid>
        <v-snackbar
            v-model="showSnackbar"
            :color="snackbarColor"
            top
            timeout="-1"
            tag="div"
        >
            {{ snackbarText }}

            <template v-slot:action="{ attrs }">
                <v-icon
                    v-bind="attrs"
                    @click="showSnackbar = false"
                    class="white--text"
                >
                mdi-close
                </v-icon>
            </template>
        </v-snackbar>
        <v-row class="pr-3">
            <v-col class="pl-0 py-0">
                <v-list-item two-line>
                    <v-list-item-content>
                        <v-list-item-title>Transactions</v-list-item-title>
                        <v-list-item-subtitle>Analyze your business account transactions.</v-list-item-subtitle>
                    </v-list-item-content>
                </v-list-item>
            </v-col>
        </v-row>
        <v-row>
            <v-col xs="12" sm="12" md="12" lg="12" xl="12">
            <!-- Display the customers table -->

                <v-card>
                    <v-card-title
                        class="px-10 py-0"
                    >
                        <v-row class="py-0">
                            <v-col xs="12" sm="12" md="12" lg="12" xl="12">
                                <v-row>
                                    <v-spacer></v-spacer>
                                    <v-btn 
                                        color="primary 
                                            custom-transform-class 
                                            text-none" 
                                            small
                                            @click="transactionModal"
                                        >Add New Transaction</v-btn>
                                </v-row> 
                            </v-col>
                            <v-col xs="12" sm="12" md="12" lg="12" xl="12">
                                <v-row>
                                    <v-btn class="
                                        rounded-l-xl 
                                        rounded-r-0
                                        text-capitalize 
                                        primary 
                                        mr-1"
                                        small
                                    >
                                        Copy
                                    </v-btn>
                                    <v-btn class="rounded-0 text-capitalize primary mr-1" small>
                                        Excel
                                    </v-btn>
                                    <v-btn color="rounded-0 primary mr-1" small>
                                        PDF
                                    </v-btn>
                                    <v-btn class="
                                        rounded-r-xl 
                                        rounded-l-0
                                        text-capitalize 
                                        primary mr-1"
                                        small
                                    >
                                        Print
                                    </v-btn>
                                    <v-spacer></v-spacer>
                                    <v-row class="py-0">
                                        <v-col cols="4" class="text-right py-0 pr-0">
                                            <!-- <v-subheader class="text-right">Search : </v-subheader> -->
                                            <v-list-item class="pr-0">
                                                <v-list-item-content>
                                                    <v-list-item-title class="grey--text text-right">Search : </v-list-item-title>
                                                </v-list-item-content>
                                            </v-list-item>
                                        </v-col>
                                        <v-col cols="8 py-0 pl-1">
                                            <v-text-field
                                                v-model="searchItem"
                                                outlined
                                                dense
                                            ></v-text-field>
                                        </v-col>
                                    </v-row>
                                </v-row>  
                            </v-col>
                        </v-row>
                    </v-card-title>
                    <v-divider></v-divider>
                    <v-row class="px-10">
                        <v-col>
                            <v-data-table
                                :headers="transactionHeaders"
                                :items="transactionList"
                                :search="searchItem"
                                :items-per-page="10"
                                :page.sync="page"
                                class="elevation-0"
                                @page-count="pageCount = $event" 
                            >
                                <template v-slot:[`item.attributes.created_at`]="{ item }">
                                    <span
                                    >
                                        {{ formatDate(item.attributes.created_at) }}
                                    </span>
                                </template>
                                <template v-slot:[`item.attributes.amount`]="{ item }">
                                    <div
                                        class="text-right"
                                    >
                                        {{ formatToFixed(item.attributes.amount) }}
                                    </div>
                                </template>
                                <template v-slot:[`item.relationships.type[0].attributes.type`]="{ item }">
                                    <v-chip
                                        :color="formatTransactionType(item.relationships.type[0].attributes.type)"
                                        small
                                    >
                                        {{ item.relationships.type[0].attributes.type }}
                                    </v-chip>
                                </template>
                                <template v-slot:[`item.relationships.method[0].attributes.method`]="{ item }">
                                    <v-chip
                                        :color="formatTransactionMethod(item.relationships.method[0].attributes.method)"
                                        small
                                    >
                                        {{ item.relationships.method[0].attributes.method }}
                                    </v-chip>
                                </template>
                                <template v-slot:[`item.delete`]="{ item }">                            
                                    <v-icon
                                        medium
                                        color="red"
                                        @click="deleteTransaction(item)"
                                        class="ml-2 text-center"
                                    >
                                        mdi-delete-circle
                                    </v-icon>
                                </template>
                                <template v-slot:[`item.edit`]="{ item }">   
                                    <v-icon
                                        medium
                                        color="blue"
                                        class="mr-2 text-center"
                                        @click="showEditTransaction(item)"
                                    >
                                        mdi-pencil-circle
                                    </v-icon>
                                </template>
                            </v-data-table>
                        </v-col>
                    </v-row>
                </v-card> 

            <!-- End of customers table -->
            </v-col>
        </v-row>

        <!-- Add transaction modal-->

        <v-dialog
            v-model="addTransactionDialog"
            persistent
            max-width="600px"
        >
            <v-card>
                <v-card-title class="text-center green px-0 py-0">
                    <v-toolbar
                        flat
                        dark
                        color="primary"
                        
                        class="mx-0"
                    >
                        <span class="headline">Transaction Details</span>
                        <v-spacer></v-spacer>
                        <v-btn
                            icon
                            dark
                            @click="closeModal"
                        >
                            <v-icon>mdi-close</v-icon>
                        </v-btn>
                    </v-toolbar>
                </v-card-title>
                <v-card-text>
                    <v-container>
                        <validation-observer
                            ref="transaction_observer"
                        >
                            <v-form>
                                <v-row>
                                    <v-col cols="12" md="6">
                                        <validation-provider
                                            v-slot="{errors}"
                                            name="Type"
                                            rules="required"
                                        >
                                            <v-select
                                                v-model="transaction.type_id"
                                                :error-messages="errors"
                                                :items="transactionTypeList"
                                                item-text="attributes.type"
                                                item-value="id"
                                                label="Type *"
                                                outlined
                                                dense
                                            ></v-select>
                                        </validation-provider>
                                    </v-col>
                                    <v-col cols="12" md="6">
                                        <validation-provider
                                            v-slot="{errors}"
                                            name="Method"
                                            rules="required"
                                        >
                                            <v-select
                                                v-model="transaction.method_id"
                                                :error-messages="errors"
                                                :items="transactionMethodList"
                                                item-text="attributes.method"
                                                item-value="id"
                                                label="Method *"
                                                outlined
                                                dense
                                            ></v-select>
                                        </validation-provider>
                                    </v-col>
                                    <v-col cols="12">
                                        <validation-provider
                                            v-slot="{errors}"
                                            name="Sender"
                                            rules="required"
                                        >
                                            <v-select
                                                v-model="transaction.sender"
                                                :error-messages="errors"
                                                :items="customerList"
                                                item-text="relationships.user[0].attributes.name"
                                                item-value="id"
                                                label="Sender *"
                                                outlined
                                                dense
                                            ></v-select>
                                        </validation-provider>
                                    </v-col>
                                    <v-col cols="12">
                                        <validation-provider
                                            v-slot="{errors}"
                                            name="Beneficiary"
                                            rules="required"
                                        >
                                            <v-select
                                                v-model="transaction.beneficiary"
                                                :error-messages="errors"
                                                :items="customerList"
                                                item-text="relationships.user[0].attributes.name"
                                                item-value="id"
                                                label="Beneficiary *"
                                                outlined
                                                dense
                                            ></v-select>
                                        </validation-provider>
                                    </v-col>
                                    <v-col cols="12">
                                        <validation-provider
                                            v-slot="{errors}"
                                            name="Amount *"
                                            rules="required"
                                        >
                                            <v-text-field
                                                v-model="transaction.amount"
                                                :error-messages="errors"
                                                label="Amount *"
                                                outlined
                                                dense
                                            ></v-text-field>
                                        </validation-provider>
                                    </v-col>
                                    <v-col cols="12">
                                        <validation-provider
                                            v-slot="{errors}"
                                            name="Order Reference"
                                            rules="required"
                                        >
                                            <v-text-field
                                                v-model="transaction.order_no"
                                                :error-messages="errors"
                                                label="Order Reference *"
                                                outlined
                                                dense
                                            ></v-text-field>
                                        </validation-provider>
                                    </v-col>
                                    <v-col cols="12" v-if="editTransaction">
                                        <validation-provider
                                            v-slot="{errors}"
                                            name="Status"
                                            rules="required"
                                        >
                                            <v-select
                                                v-model="transaction.status_id"
                                                :error-messages="errors"
                                                :items="transactionStatusList"
                                                item-text="attributes.status"
                                                item-value="id"
                                                label="Status *"
                                                outlined
                                                dense
                                            ></v-select>
                                        </validation-provider>
                                    </v-col>
                                </v-row>
                            </v-form>
                        </validation-observer>
                    </v-container>
                <small>* field is required</small>
                </v-card-text>
                <v-card-actions class="px-8 pb-5">
                <v-spacer></v-spacer>
                <v-btn
                    color="warning darken-1 text-capitalize"
                    @click="closeModal"
                >
                    Cancel
                </v-btn>
                <v-btn v-if="editTransaction"
                    color="blue darken-1 text-capitalize success"
                    @click="handleEditTransaction"
                >
                    Save Changes
                </v-btn>
                <v-btn v-if="!editTransaction"
                    color="blue darken-1 text-capitalize success"
                    @click="handleAddTransaction"
                >
                    Submit
                </v-btn>
            </v-card-actions>
            </v-card>
        </v-dialog>

        <!-- End modal -->

        <!-- Delete Transaction modal -->

        <v-dialog
            v-model="showDeleteModal"
            persistent
            max-width="400px"
        >
            <v-card>
                <v-card-title class="text-center">
                    <v-list-item>
                        <v-list-item-content>
                            <v-list-item-title class="grey--text">Permanent Delete</v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>
                </v-card-title>
                <v-card-text>
                    <v-container class="text-center"> 
                        <v-list-item>
                            <v-list-item-content>
                                <v-list-item-title class="grey--text">{{ transaction.ref_no }}</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                        <v-avatar
                            size="100"
                        >
                            <v-icon 
                                class="red--text"
                                x-large
                            >mdi-delete-forever</v-icon>
                        </v-avatar>
                        <v-list-item two-line>
                            <v-list-item-content>
                                <v-list-item-title class="py-2">Are you sure?</v-list-item-title>                                            
                                <v-list-item-subtitle class="grey--text">Do you really want to delete the record? <br/>Will delete record permanently!</v-list-item-subtitle>
                            </v-list-item-content>
                        </v-list-item>
                    </v-container>
                </v-card-text>
                <v-card-actions class="px-10 pb-5">
                    <v-row>
                        <v-btn
                            color="grey darken-1"
                            class="white--text text-capitalize"
                            @click="closeModal()"
                        >
                        Cancel
                        </v-btn>
                        <v-spacer></v-spacer>
                        <v-btn
                            class="red text-capitalize white--text"   
                            @click="handleDeleteTransaction()"                  
                        >Delete</v-btn>
                    </v-row>
                </v-card-actions>
            </v-card>
        </v-dialog>

        <!-- End modal -->
    </v-container>
</template>

<script>
import { format, parseISO } from 'date-fns';
import Transaction from '../models/Transaction';

export default {
    name : 'Transaction',
    data () {
        return {
            transactionHeaders : [
                {
                    text : 'Date/Time',
                    align : 'Start',
                    sortable : true,
                    value : 'attributes.created_at'
                },
                {
                    text : 'Sender Name',
                    align : 'Start',
                    sortable : true,
                    value : 'relationships.sender[0].relationships.user[0].attributes.name'
                },
                {
                    text : 'Beneficiary',
                    align : 'Start',
                    sortable : true,
                    value : 'relationships.beneficiary[0].relationships.user[0].attributes.name'
                },
                {
                    text : 'Transaction Type',
                    align : 'Start',
                    sortable : true,
                    value : 'relationships.type[0].attributes.type'
                },
                {
                    text : 'Payment Method',
                    align : 'Start',
                    sortable : true,
                    value : 'relationships.method[0].attributes.method'
                },
                {
                    text : 'Currency',
                    align : 'center',
                    sortable : true,
                    value : 'relationships.sender[0].relationships.currency[0].attributes.slug'
                },
                {
                    text : 'Amount',
                    align : 'Start',
                    sortable : true,
                    value : 'attributes.amount'
                },
                {
                    text : 'Ref. No.',
                    align : 'Start',
                    sortable : true,
                    value : 'attributes.ref_no'
                },
                {
                    text : 'Order Ref.',
                    align : 'Start',
                    sortable : true,
                    value : 'attributes.order_no'
                },
                {
                    text : 'Status',
                    align : 'Start',
                    sortable : true,
                    value : 'relationships.status[0].attributes.status'
                },
                {
                    text : 'Delete',
                    value : 'delete',
                    sortable : false
                },
                {
                    text : 'Edit',
                    value : 'edit',
                    sortable : false
                }
            ],
            page : 1,
            searchItem : '',
            transaction : new Transaction(),
            addTransactionDialog : false,
            editTransaction : false,
            showDeleteModal : false,
            showSnackbar : false,
            snackbarColor : 'default',
            snackbarText : '',
        }
    },
    created () {
        this.$nextTick(() => {
            this.getTransactionMethodList()
            this.getTransactionTypeList()
            this.getTransactionStatusList()
        });
    },
    computed : {

        // Customer list
        customerList() {
            return this.$store.state.customer.list
        },

        // Transaction list
        transactionList() {
            return this.$store.state.transaction.list
        },       

        // Transaction methods list
        transactionMethodList() {
            return this.$store.state.transaction.methods
        },

        // Transaction status list
        transactionStatusList() {
            return this.$store.state.transaction.status
        },

        // Transaction types list
        transactionTypeList() {
            return this.$store.state.transaction.types
        },
    },    
    methods : {
        /**
         * 
         */
        getTransactionMethodList() { this.$store.dispatch('transaction/methods'); },

        /**
         * 
         */
        getTransactionTypeList() { this.$store.dispatch('transaction/types'); },

        /**
         * 
         */
        getTransactionStatusList() { this.$store.dispatch('transaction/status'); },

        /**
         * Format date
         */
        formatDate(date) {
            return format(parseISO(new Date(date).toISOString()), 'dd/MM/yyyy')
        },

        /**
         * Format amount paid to two decimal places
         */
        formatToFixed(amount) {
            let a = parseInt(amount) //.toFixed(2);
            return a.toLocaleString('en-US', {maximumFractionDigits:2});
        },
        
        /**
         * Format transaction type color
         */
        formatTransactionType(type) {
            switch (type) {
                case 'Loyalty' :
                    return 'success';
                default :
                    return 'orange white--text'
            }
        },
        
        /**
         * Format transaction method color
         */
        formatTransactionMethod(method) {
            switch (method) {
                case 'Cash' :
                    return 'teal white--text';
                default :
                return 'primary'
                    // return 'grey darken-4 white--text'
            }
        },

        /**
         * Add new transaction
         */
        transactionModal() {
            this.addTransactionDialog = !this.addTransactionDialog;
        },

        /**
         * Close modal
         */
        closeModal() {
            this.setDataToNull();
            this.editTransaction = false;
            this.addTransactionDialog = false;
            this.showDeleteModal = false;
        },

        /**
         * Show edit transaction modal
         */
        showEditTransaction(transaction) {
            this.transaction.id = transaction.id;
            this.transaction.type_id = transaction.relationships.type[0].id
            this.transaction.method_id = transaction.relationships.method[0].id
            this.transaction.sender = transaction.relationships.sender[0].relationships.user[0].id
            this.transaction.beneficiary = transaction.relationships.beneficiary[0].relationships.user[0].id
            this.transaction.amount = transaction.attributes.amount;
            this.transaction.order_no = transaction.attributes.order_no;
            this.transaction.status_id = transaction.relationships.status[0].id

            this.editTransaction = !this.editTransaction;

            this.transactionModal();
        },

        /**
         * Set data to null
         */
        setDataToNull() {
            this.transaction.id = '';
            this.transaction.type_id = '';
            this.transaction.method_id = '';
            this.transaction.status_id = '',
            this.transaction.sender = '';
            this.transaction.beneficiary = '';
            this.transaction.amount = '';
            this.transaction.order_no = '';
        },

        /**
         * Handle edit transaction
         */
        handleEditTransaction() {
            this.$refs.transaction_observer.validate().then(
               isValid => {
                   if(isValid === true) {
                       this.$store.dispatch('transaction/update', this.transaction).then(
                            feedback => {
                                let status = feedback.status
                                switch (status) {
                                    case 200 :
                                        this.closeModal();                                      
                                        this.snackbarText = "Transaction "+ feedback.data.attributes.ref_no +" updated successfuly.";
                                        this.snackbarColor = 'primary'
                                        this.showSnackbar = !this.showSnackbar
                                        break;
                                    default :
                                         console.log(feedback.data)
                                }
                            },
                            fail => {
                                this.snackbarText = fail.response.data.message;
                                this.snackbarColor = 'error'
                                this.showSnackbar = !this.showSnackbar
                            }
                        );
                   }
               }
            );
        },

        /**
         * Handle add transaction
         */
        handleAddTransaction() {
            this.$refs.transaction_observer.validate().then(
               isValid => {
                   if(isValid === true) {
                       this.$store.dispatch('transaction/create', this.transaction).then(
                            feedback => {
                                let status = feedback.status
                                switch (status) {
                                    case 201 :
                                        this.closeModal()    
                                        this.snackbarText = "Transaction "+ feedback.data.attributes.ref_no +" updated successfuly.";
                                        this.snackbarColor = 'success'
                                        this.showSnackbar = !this.showSnackbar                                   
                                        break;
                                    default :
                                         console.log(feedback.data)
                                }
                            },
                            fail => {
                                this.snackbarText = fail.response.data.message;
                                this.snackbarColor = 'error';
                                this.showSnackbar = !this.showSnackbar;
                            }
                        );
                   }
               }
            );
        },

        /**
         * Delete transaction modal
         */
        deleteTransaction(transaction) {
            this.transaction.id = transaction.id;
            this.transaction.ref_no = transaction.attributes.ref_no;
            this.showDeleteModal = !this.showDeleteModal;
        },

        /**
         * Handle add transaction
         */
        handleDeleteTransaction() {
            this.$store.dispatch('transaction/delete', this.transaction).then(
                feedback => {
                    let status = feedback.status
                    switch (status) {
                        case 200 :
                            this.closeModal()     
                            this.snackbarText = "Transaction " + feedback.data.attributes.ref_no +" deleted successfuly.";
                            this.snackbarColor = 'success';
                            this.showSnackbar = !this.showSnackbar;                                  
                            break;
                        default :
                            console.log(feedback.data)
                    }
                },
                fail => {
                    this.snackbarText = fail.response.data.message;
                    this.snackbarColor = 'error';
                    this.showSnackbar = !this.showSnackbar;
                }
            );
        },
    }
    
}
</script>