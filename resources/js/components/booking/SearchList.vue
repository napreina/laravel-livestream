<template>
    <div class="searchList">
        <h3>Flight List <a href="#" class="btn btn-primary" @click.prevent="backToSearch">Back to Search</a></h3>
        <hr>
        <div class="row">
            <div class="col-sm-4" v-for="(flight,index) in searchList" :key="index">
                <div class="card">
                    <div class="card-body">
                        <p class="text-bold">Flight Number {{ flight["@attributes"].FlightNumber }}</p>
                        <p>Travel Time: {{ flight['@attributes'].TravelTime }}</p>
                        <p>Destination: {{ flight['@attributes'].Destination }}</p>
                        <p>Equipment: {{ flight['@attributes'].Equipment }}</p>
                        <p>Departure Time: {{ flight['@attributes'].DepartureTime }}</p>
                        <p>Carrier: {{ flight['@attributes'].Carrier }}</p>
                        <p>Category: {{ flight['@attributes'].AvailabilityDisplayType }}</p>
                        
                        <div v-for="(f,index) in flight.air_AirAvailInfo.air_BookingCodeInfo" :key="index">
                                <!-- <p v-if="f['@attributes'].BookingCounts"> BookingCounts: {{ f['@attributes'].BookingCounts }} </p> -->
                               <div v-if="f['@attributes']">
                                   <p> CabinClass: {{ f['@attributes'].CabinClass }} </p>
                                   <p> BookingCounts: {{ f['@attributes'].BookingCounts }} </p>
                               </div>
                               <div v-else>
                                   <p> CabinClass: {{ f.CabinClass }} </p>
                                   <p> BookingCounts: {{ f.BookingCounts }} </p>
                               </div>
                        </div>
                        <a href="#" class="btn btn-primary">Book Flight</a>
                    </div>
                </div>
            </div><br>
        </div>
    </div>
</template>

<script>
    import { Events } from "../../event";
    export default {
        name: 'search-list',
        
        props: {
            searchList: {
                type: Array,
                required: true
            }
        },
        data() {
            return {

            }
        },
        methods: {
            backToSearch() {
                Events.$emit('backToSearch');
            }
        },
        mounted(){
    
        }

    }
</script>
<style>
.searchList {
    background-color: #fff;
    min-height: 100vh;
    padding: 1rem;
    position: relative;
    z-index: 2;
}
.searchList h3 {
}
</style>


