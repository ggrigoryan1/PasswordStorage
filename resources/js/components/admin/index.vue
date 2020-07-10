<template>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Общая статистика</div>

            <div class="card-body">
                <table class="table table-bordered text-center">
                    <tbody>
                        <tr>
                        <th scope="row">Всего пользователей</th>
                        <td>{{data.userCount}}</td>
                        </tr>
                        <tr>
                        <th scope="row">Всего проектов</th>
                        <td>{{data.projectCount}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'data'
        ],
        mounted() {
        }
    }
</script>
