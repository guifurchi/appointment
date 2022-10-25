<div class="main-content">
    <div class="content-wrapper">
        <div class="col-12">
            <div class="content-header">Lista de Pessoas</div>
            <p class="content-sub-header">Lista de pessoas que realizaram agendamentos. Uma mesma pessoa pode aparecer várias vezes na lista caso o telefone, nome ou cpf estejam diferentes.</p>
        </div>
        <section id="configuration">
            <div class="row match-height">
                <div class="col-xl-13 col-lg-12 col-12">
                    <div class="card">
                        <div class="card-header pb-2">
                        <form method="get" onsubmit="loading()">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control" placeholder="Busque por Nome, CPF/CNPJ (somente números), Email ou Telefone (somente números)" minlength="5" value="">
                                <div class="input-group-append">
                                <button class="btn btn-raised btn-primary" type="submit">Buscar</button>
                                </div>
                            </div>
                        </form>
                        </div>
                        <div class="card-content table-responsive">
                        <ul class="pagination">
                                <span class="step-links">
                                    <span class="current">
                                        <text class="strong">&nbsp; Página 1 de 1.</text>
                                    </span>
                                </span>
                            </ul><table class="table table-sm table-responsive text-center table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>CPF</th>
                                    <th>Telefone</th>
                                    <th>Empresa</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Guilherme Furchi</td>
                                    <td>guifurchi65@gmail.com</td>
                                    <td></td>
                                    <td>(92) 98188 2726</td>
                                    <td></td>
                                    <td>
                                    <a href="/clientes/25454" class="btn-sm btn-info">Visualizar</a>
                                    <a href="/clientes/25454/excluir/" class="btn-sm btn-danger">Remover</a>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>Lucas Furchi</td>
                                    <td>guifurchi65@gmail.com</td>
                                    <td></td>
                                    <td>(92) 98188 2726</td>
                                    <td></td>
                                    <td>
                                    <a href="/clientes/25945" class="btn-sm btn-info">Visualizar</a>
                                    <a href="/clientes/25945/excluir/" class="btn-sm btn-danger">Remover</a>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>Valeria</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                    <a href="/clientes/26578" class="btn-sm btn-info">Visualizar</a>
                                    <a href="/clientes/26578/excluir/" class="btn-sm btn-danger">Remover</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        <ul class="pagination">
                            <span class="step-links">
                                <span class="current">
                                    <text class="strong">&nbsp; Página 1 de 1.</text>
                                </span>
                            </span>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>