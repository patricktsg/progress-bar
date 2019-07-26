<template>
    <div class="flex">
            <div class="rounded-lg" style="height:16px;width:100%;background-color: #f1f5f8;">
                <div class="rounded-lg progbar" :class="{ 'p-1': field.value > 0 }"
                 style="height:16px;clear:both;" 
                 :style="{ background: setBarColor(field.value), width: field.value + '%'}">
                </div>
            </div>
    </div>
</template>

<script>
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'], 
    methods: {
        setBarColor: function (value) {
            if (value < 50 ) {
                return '#ef5753';
            } else if (value <= 60) {
                return '#de751f';
            } else if (value <= 70) {
                return '#f6993f';
            } else if (value <= 80) {
                return '#faad63';
            } else if (value <= 90) {
                return '#51d88a';
            } else if (value = 100) {
                return '#38c172';
            }
        }
    }
}
</script>
