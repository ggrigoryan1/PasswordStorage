<div class="shadow card">
    <div class="card-header">
        <button type="submit" class="btn btn-primary float-right">Сохранить</button>
    </div>
</div>

<div class="card mt-3">
	<div class="card-header">
		<ul class="nav nav-tabs card-header-tabs">
		    <li class="nav-item">
                <a class="nav-link active"
                    id="general-tab"
                    data-toggle="tab"
                    href="#general"
                    role="tab"
                    aria-controls="general"
                    aria-selected="true"><i class="fas fa-server"></i> Основное
                </a>
		    </li>
		    {{-- <li class="nav-item">
                <a class="nav-link"
                    id="description-tab"
                    data-toggle="tab"
                    href="#description"
                    role="tab"
                    aria-controls="description"
                    aria-selected="true"><i class="fa fa-database"></i> Доступы к базе данных
                </a>
		    </li> --}}
            <li class="nav-item">
                <a class="nav-link"
                    id="downoload-tab"
                    data-toggle="tab"
                    href="#downoload"
                    role="tab"
                    aria-controls="downoload"
                    aria-selected="false"><i class="fa fa-download"></i> Файлы
                </a>
		    </li>
		</ul>
	</div>
	<div class="card-body">

		<div class="tab-content" id="myTabContent">

		    <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">

				<div class="form-group">
				    <label>Имя</label>
                    <input type="text"
                        class="form-control"
                        name="name" placeholder="Имя проекта"
                        value="{{ $project->name ?? '' }}" required>
                </div>

                <div class="form-group">
				    <label>Имя пользователя(сервер)</label>
                    <input type="text"
                        class="form-control"
                        name="user_name" placeholder="Имя пользователя от сервера"
                        value="{{ $project->user_name ?? '' }}">
                </div>

                <div class="form-group">
				    <label>Пароль(сервер)</label>
                    <input type="text"
                        class="form-control"
                        name="password" placeholder="Пароль от сервера"
                        value="{{ $project->password ?? '' }}">
                </div>

                <div class="form-group">
				    <label>Хост(сервер)</label>
                    <input type="text"
                        class="form-control"
                        name="hosts" placeholder="Хост от сервера"
                        value="{{ $project->hosts ?? '' }}">
                </div>

                <div class="form-group">
				    <label>Имя пользователя(базы данных)</label>
                    <input type="text"
                        class="form-control"
                        name="db_user" placeholder="Имя пользователя от базы данных"
                        value="{{ $project->db_user ?? '' }}">
                </div>

                <div class="form-group">
				    <label>Пароль(базы данных)</label>
                    <input type="text"
                        class="form-control"
                        name="db_password" placeholder="Пароль от базы данных"
                        value="{{ $project->db_password ?? '' }}">
                </div>

                <div class="form-group">
				    <label>Имя(базы данных)</label>
                    <input type="text"
                        class="form-control"
                        name="db_database" placeholder="Имя от базы данных"
                        value="{{ $project->db_database ?? '' }}">
				</div>

		    </div>

            <div class="tab-pane fade" id="downoload" role="tabpanel" aria-labelledby="meta-tab">

				<div class="form-group">
                    <upload-file-component :files="{{ $project->downloads ?? '[]' }}"></upload-file-component>
                </div>

			</div>

		</div>

	</div>
</div>
