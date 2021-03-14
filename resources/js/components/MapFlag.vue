<template>
    <div @click="locationset" id="map">
        <div class="w-max h-auto">
            <img v-bind:src="floormap">
        </div>
        <div>
            <img v-bind:src="pin" name="pin" :style="pinPosition" v-show="pinFlag">
        </div>
        <table>
            <thead>
                <th>shop name</th>
            </thead>
            <tbody>
                <tr v-for="shop in shops" :key="shop.id">
                    <td>{{ shop.shop_name }}</td>
                    <td>offset: {{ offsetx }}/{{ offsety }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    /* eslint-disable no-console */
    export default {
        props: {
            shops: Array,
            floormap: String,
            pin: String
        },
        data() {
            return {
                offsetx: 0,
                offsety: 0,
                mapElement: "",
                mapLocate: 0,
                mapTop: 0,
                pinFlag: false,
                pinPosition: ""
            };
        },
        methods: {
            locationset:function (e) {
                this.offsetx = e.offsetX;
                this.offsety = e.offsetY;
                this.mapElement = document.getElementById("map");
                this.mapLocate = this.mapElement.getBoundingClientRect();
                this.mapTop = this.mapLocate.top + this.offsety - 16;
                this.pinFlag = true;
                this.pinPosition = "position: absolute;top: " + this.mapTop + ";left: " + this.offsetx;
            }
        }
    };
</script>
