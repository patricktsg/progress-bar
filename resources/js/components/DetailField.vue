<template>
            <panel-item :field="field">   
                <template slot="value">
                    <div class="rounded-lg progbar" :class="{ 'p-1': field.value > 0 }"
                      style="height:16px;clear:both;" 
                      :style="{ background: setBarColor(field.value), width: field.value + '%'}">
                    </div>
                </template>
            </panel-item>
</template>

<script>
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'], 
    methods: {
        setBarColor: function (value) {
            if (value < 10) {
                return '#cc1f1a';
            } 
            else if (value < 20 ) {
                return '#e3342f';
            }
            else if (value < 30 ) {
                return '#ef5753';
            } 
            else if (value < 40 ) {
                return '#de751f';
            }
            else if (value < 50 ) {
                return '#f6993f';
            } 
            else if (value <= 60) {
                return '#faad63';
            } 
            else if (value <= 70) {
                return '#a2f5bf';
            } 
            else if (value <= 80) {
                return '#51d88a';
            } 
            else if (value <= 90) {
                return '#38c172';
            } 
            else if (value = 100) {
                return '#1f9d55';
            }
        }
    }
}
</script>
