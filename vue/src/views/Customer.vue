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
                        <v-list-item-title>Customers</v-list-item-title>
                        <v-list-item-subtitle>Here's a list of the people who also help you grow your business.</v-list-item-subtitle>
                    </v-list-item-content>
                </v-list-item>
            </v-col>
            <v-col class="py-0">
                <v-row>
                    <v-spacer></v-spacer>
                    <v-btn x-small class="py-4">
                        <v-icon icon>mdi-refresh</v-icon>
                    </v-btn>
                </v-row>
            </v-col>
            <v-col xs="12" sm="12" md="12" lg="12" xl="12">
                <div>
                    <v-alert
                        v-model="alert"
                        dismissible
                        elevation="1"
                        icon="mdi-alert-octagon-outline"
                    >
                        Not all heroes wear caps and costumes. Here is a list of your super heroes. You can also <v-btn color="primary custom-transform-class text-none" small>SMS your customers</v-btn>
                    </v-alert>
                </div>
            </v-col>
        </v-row>
        <v-row>
            <v-col xs="12" sm="12" md="12" lg="12" xl="12">  
            <!-- Display the customers table -->
                <v-card class="px-10">
                    <v-card-title
                        class="py-0"
                    >
                        <v-row class="py-0">
                            <v-col xs="12" sm="12" md="12" lg="12" xl="12">
                                <v-row>
                                    <v-spacer></v-spacer>
                                    <v-btn color="
                                        primary 
                                        custom-transform-class 
                                        text-none" 
                                        small
                                        @click="showAddCustomer"
                                    >Add New Customer</v-btn>
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
                    <v-row>
                        <v-col>
                            <v-data-table
                                :headers="customerHeaders"
                                :items="customerList"
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
                                <template v-slot:[`item.attributes.amount_paid`]="{ item }">
                                    <div
                                        class="text-right"
                                    >
                                        {{ formatToFixed(item.attributes.amount_paid) }}
                                    </div>
                                </template>
                                <template v-slot:[`item.relationships.status[0].attributes.status`]="{ item }">
                                    <v-chip
                                        :color="statusColor(item.relationships.status[0].attributes.status)"
                                        small
                                    >
                                        {{ item.relationships.status[0].attributes.status }}
                                    </v-chip>
                                </template>
                                <template v-slot:[`item.delete`]="{ item }">                            
                                    <v-icon
                                        medium
                                        color="red"
                                        @click="deleteCustomer(item)"
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
                                        @click="showEditCustomer(item)"
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

        <!-- Add customer modal -->

        <v-dialog
            v-model="addCustomerDialog"
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
                    <span class="headline">Customer Details</span>
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
                        ref="customer_observer"
                    >
                        <v-form>
                            <v-row>
                                <v-col cols="12" md="6">
                                    <validation-provider
                                        v-slot="{errors}"
                                        name="First Name"
                                        rules="required"
                                    >
                                        <v-text-field
                                            v-model="customer.first_name"
                                            :error-messages="errors"
                                            label="First Name *"
                                            outlined
                                            dense
                                        ></v-text-field>
                                    </validation-provider>
                                </v-col>
                                <v-col cols="12" md="6">
                                    <validation-provider
                                        v-slot="{errors}"
                                        name="Last Name"
                                        rules="required"
                                    >
                                        <v-text-field
                                            v-model="customer.last_name"
                                            :error-messages="errors"
                                            label="Last Name *"
                                            outlined
                                            dense
                                        ></v-text-field>
                                    </validation-provider>
                                </v-col>
                                <!-- <v-col cols="12">
                                    <validation-provider
                                        v-slot="{errors}"
                                        name="Email"
                                    >
                                        <v-text-field
                                            v-model="customer.email"
                                            :error-messages="errors"
                                            label="Email"
                                            outlined
                                            dense
                                        ></v-text-field>
                                    </validation-provider>
                                </v-col> -->
                                <v-col cols="12">
                                    <validation-provider
                                        v-slot="{errors}"
                                        name="Phone Number *"
                                        rules="required"
                                    >
                                        <v-text-field
                                            v-model="customer.phone"
                                            :error-messages="errors"
                                            label="Phone Number"
                                            prefix="+254"
                                            outlined
                                            dense
                                        ></v-text-field>
                                    </validation-provider>
                                </v-col>
                                <v-col cols="12" md="6">
                                    <validation-provider
                                        v-slot="{errors}"
                                        name="ID Number"
                                        rules="required"
                                    >
                                        <v-text-field
                                            v-model="customer.id_number"
                                            :error-messages="errors"
                                            label="ID Number *"
                                            outlined
                                            dense
                                        ></v-text-field>
                                    </validation-provider>
                                </v-col>
                                <v-col cols="12" md="6">
                                    <validation-provider
                                        v-slot="{errors}"
                                        name="Gender"
                                    >
                                        <v-select
                                            v-model="customer.gender_id"
                                            :error-messages="errors"
                                            :items="customerGenderList"
                                            item-text="attributes.sex"
                                            item-value="id"
                                            label="Gender"
                                            outlined
                                            dense
                                        ></v-select>
                                    </validation-provider>
                                </v-col>
                                <v-col cols="12">
                                    <validation-provider
                                        v-slot="{errors}"
                                        name="Currency"
                                        rules="required"
                                    >
                                        <v-select
                                            v-model="customer.currency_id"
                                            :error-messages="errors"
                                            :items="currencyList"
                                            item-text="attributes.currency"
                                            item-value="id"
                                            label="Currency *"
                                            outlined
                                            dense
                                        ></v-select>
                                    </validation-provider>
                                </v-col>
                                <v-col cols="12">
                                    <validation-provider
                                        v-slot="{errors}"
                                        name="Group"
                                        rules="required"
                                    >
                                        <v-select
                                            v-model="customer.group_id"
                                            :error-messages="errors"
                                            :items="customerGroupList"
                                            item-text="attributes.group"
                                            item-value="id"
                                            label="Group *"
                                            outlined
                                            dense
                                        ></v-select>
                                    </validation-provider>
                                </v-col>
                                <v-col cols="12" v-if="editCustomer">
                                    <validation-provider
                                        v-slot="{errors}"
                                        name="Status"
                                        rules="required"
                                    >
                                        <v-select
                                            v-model="customer.status_id"
                                            :error-messages="errors"
                                            :items="customerStatusList"
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
            <small>* field is required.</small>
            </v-card-text>
            <v-card-actions class="px-8 pb-5">
                <v-spacer></v-spacer>
                <v-btn
                    color="warning darken-1 text-capitalize"
                    @click="closeModal"
                >
                    Cancel
                </v-btn>
                <v-btn v-if="editCustomer"
                    color="blue darken-1 text-capitalize success"
                    @click="handleEditCustomer"
                >
                    Save Changes
                </v-btn>
                <v-btn v-if="!editCustomer"
                    color="blue darken-1 text-capitalize success"
                    @click="handleAddCustomer"
                >
                    Submit
                </v-btn>
            </v-card-actions>
        </v-card>
        </v-dialog>

        <!-- End add customer -->

        <!-- Delete customer modal -->

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
                                <v-list-item-title class="grey--text">{{ customer.name }}</v-list-item-title>
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
                            @click="handleDeleteCustomer()"                  
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
import Customer from '../models/Customer';

export default {
    name : 'Customer',
    data () {
        return {
            customerHeaders : [
                {
                    text : 'Name',
                    align : 'Start',
                    sortable : true,
                    value : 'relationships.user[0].attributes.name'
                },
                {
                    text : 'Phone',
                    align : 'Start',
                    sortable : true,
                    value : 'relationships.user[0].relationships.primary_phone[0].attributes.phone'
                },
                {
                    text : 'Join Date',
                    align : 'Start',
                    sortable : true,
                    value : 'attributes.created_at'
                },
                {
                    text : 'Currency',
                    align : 'center',
                    sortable : true,
                    value : 'relationships.currency[0].attributes.slug'
                },
                {
                    text : 'Amount Paid',
                    align : 'center',
                    sortable : true,
                    value : 'attributes.amount_paid'
                },
                {
                    text : 'Group',
                    align : 'right',
                    sortable : true,
                    value : 'relationships.group[0].attributes.group'
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
            customer : new Customer(),
            editCustomer : false,
            addCustomerDialog : false,
            alert : true,
            showDeleteModal : false,
            showSnackbar : false,
            snackbarColor : 'default',
            snackbarText : '',
        }
    },
    created () {
        this.$nextTick(() => {
            this.getGenderList()
            this.getStatusList()
            this.getGroupList()
            this.getCurrencyList();
        });
    },
    computed : {

        // Customer list
        customerList() {
            return this.$store.state.customer.list
        },

        // Customer gender list
        customerGenderList() {
            return this.$store.state.customer.gender
        },

        // Customer status list
        customerStatusList() {
            return this.$store.state.customer.status
        },

        // Customer status list
        customerGroupList() {
            return this.$store.state.customer.groups
        },

        // Currency list
        currencyList() {
            return this.$store.state.customer.currency
        }
    },    
    methods : {
        /**
         * Get a list of customer gender
         */
        getGenderList() { this.$store.dispatch('customer/gender'); },

        /**
         * Get a list of customer states/status
         */
        getStatusList() { this.$store.dispatch('customer/status'); },

        /**
         * Get a list of customer groups
         */
        getGroupList() { this.$store.dispatch('customer/groups'); },

        /**
         * Get a list of currencies
         */
        getCurrencyList() { this.$store.dispatch('customer/currency'); },

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
         * Customer Status color
         */
        statusColor(status) {
            switch (status) {
                case 'Active' :
                    return 'success';
                case 'Inactive' :
                    return 'warning';
                default :
                    return 'grey';
            }
        },
        
        /**
         * show add customer modal
         */
        showAddCustomer() {   
            this.addCustomerDialog = !this.addCustomerDialog;            
        },

        /**
         * Show edit customer
         */
        showEditCustomer(customer) {

            // EXtract the customer data
            this.customer.id = customer.id;
            this.customer.first_name = customer.relationships.user[0].attributes.firstName;
            this.customer.last_name = customer.relationships.user[0].attributes.lastName;

            // if(customer.relationships.user[0].relationships.primary_email[0] !== null) {
            //     this.customer.email = customer.relationships.user[0].relationships.primary_email[0].attributes.email;
            // }

            if(customer.relationships.user[0].relationships.primary_phone[0] !== null) {
                this.customer.phone = customer.relationships.user[0].relationships.primary_phone[0].attributes.phone;
            }

            this.customer.id_number = customer.relationships.user[0].attributes.id_number;

            if(customer.relationships.user[0].relationships.gender[0] !== null) {
                this.customer.gender_id = customer.relationships.user[0].relationships.gender[0].id;
            }
            
            this.customer.currency_id = customer.relationships.currency[0].id
            this.customer.group_id = customer.relationships.group[0].id
            this.customer.status_id = customer.relationships.status[0].id

            this.editCustomer = !this.editCustomer;

            this.addCustomerDialog = !this.addCustomerDialog;
        },

        /**
         * Set user data to null
         */
        setUserDataToNull () {
            this.editCustomer = false;
            this.customer.id = null;
            this.customer.first_name = null;
            this.customer.last_name = null;
            // this.customer.email = null;
            this.customer.phone = null;
            this.customer.id_number = null;
            this.customer.gender_id = null;
            this.customer.currency_id = null;
            this.customer.group_id = null;
            this.customer.status_id = null;
        },

        /**
         * Close modal
         */
        closeModal() {
            this.setUserDataToNull();
            this.showDeleteModal = false;
            this.addCustomerDialog = false;
        },

        /**
         * Handle edit customer
         */
        handleEditCustomer() {
            this.$refs.customer_observer.validate().then(
                isValid => {
                    if(isValid === true) {
                        this.$store.dispatch('customer/update', this.customer).then(
                            feedback => {
                                let status = feedback.status
                                switch (status) {
                                    case  200 :
                                        this.closeModal()
                                        this.snackbarText = "Customer " + feedback.data.relationships.user[0].attributes.name +" updated successfuly.";
                                        this.snackbarColor = 'primary';
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
                        )
                    }
                }
            )
        },

        /**
         * Handle add customer
         */
        handleAddCustomer() {
            this.$refs.customer_observer.validate().then(
                isValid => {
                    if(isValid === true) {
                        this.$store.dispatch('customer/create', this.customer).then(
                            feedback => {
                                let status = feedback.status
                                switch (status) {
                                    case  201 :
                                        this.closeModal()    
                                        this.snackbarText = "Customer " + feedback.data.relationships.user[0].attributes.name +" deleted successfuly.";
                                        this.snackbarColor = 'primary';
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
                        )
                    }
                }
            )
        },

        /**
         * Delete transaction modal
         */
        deleteCustomer(customer) {
            this.customer.id = customer.id;
            this.customer.name = customer.relationships.user[0].attributes.name
            this.showDeleteModal = !this.showDeleteModal;
        },

        /**
         * Handle add transaction
         */
        handleDeleteCustomer() {
            this.$store.dispatch('customer/delete', this.transaction).then(
                feedback => {
                    let status = feedback.status
                    switch (status) {
                        case 200 :
                            this.closeModal()     
                            this.snackbarText = "Customer " + feedback.data.relationships.user[0].attributes.name +" deleted successfuly.";
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