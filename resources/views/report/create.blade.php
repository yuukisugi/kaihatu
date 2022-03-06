<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div id="app" class="p-3">
        <div class="row">
            <div class="col-4">
                <span class="badge badge-info mb-3">テストリンク</span>
                <ul class="pl-3">
                    <li>
                        <a href="?target=posts&id=3">[posts] テーブルの ID:3 を報告する</a>
                    </li>
                    <li>
                        <a href="?target=books&id=5">[books] テーブルの ID:5 を報告する</a>
                    </li>
                    <li>
                        <a href="?target=items&id=4">[items] テーブルの ID:4 を報告する（コンフィグで登録されていない）</a>
                    </li>
                    <li>
                        <a href="./create">パラメータなし</a>
                    </li>
                </ul>
            </div>
            <div class="col-4">
                <h1 class="mb-4">違反報告フォーム</h1>
                <div class="form-group">
                    <div class="alert alert-danger" v-if="errors.id" v-text="errors.id"></div>
                    <div class="alert alert-danger" v-if="errors.target" v-text="errors.target"></div>
                    <label>カテゴリ</label>
                    <select class="form-control" v-model="params.report_category_id">
                        <option value="">▼以下から選択してください</option>
                        <option v-for="c in reportCategories" :value="c.id" v-text="c.name"></option>
                    </select>
                    <div class="alert alert-danger" v-if="errors.report_category_id" v-text="errors.report_category_id"></div>
                </div>
                <div class="form-group">
                    <label>メッセージ</label>
                    <textarea rows="7" class="form-control" v-model="params.comment"></textarea>
                    <div class="alert alert-danger" v-if="errors.comment" v-text="errors.comment"></div>
                </div>
                <div class="text-right">
                    <button type="button" class="btn btn-danger btn-lg" @click="onSubmit">報告する</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
    <script>

        new Vue({
            el: '#app',
            data: {
                params: {
                    id: '{{ $id }}',
                    target: '{{ $target }}',
                    report_category_id: '',
                    comment: ''
                },
                errors: {},
                reportCategories: {!! $report_categories !!}
            },
            methods: {
                onSubmit() {

                    if(confirm('違反報告を送信します。よろしいですか？')) {

                        this.errors = {};
                        const url = '/report';
                        axios.post(url, this.params)
                            .then(response => {

                                if(response.data.result === true) {

                                    alert('報告が完了しました');

                                    this.params.report_category_id = '';
                                    this.params.comment = '';

                                }

                            })
                            .catch(error => {

                                const responseErrors = error.response.data.errors;
                                let errors = {};

                                for(const key in responseErrors) {

                                    errors[key] = '⚠ '+ responseErrors[key][0];

                                }

                                this.errors = errors;

                            });

                    }

                }
            }
        });

    </script>
</body>
</html>