<template>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <h3>{{name}}</h3>
                </div>
            </div>

        </div>

    </div>

</template>

<script>

    export default {
        name: "project",
        props : ['name','department','industry','industry',
            'work_we_delivered','description','thumbnail','project_photos',
            'date_start','date_end'

        ]
    };
</script>

<style scoped>

</style>
