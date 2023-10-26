<template>
  <div class="all-content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="logo-pro">
            <a href="index.html"
              ><img class="main-logo" src="img/logo/logo.png" alt=""
            /></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div  class="product-status mg-b-50">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="product-status-wrap">
            <h4>Agents List</h4>
            <div  class="add-product">
              <div class="shadow-inner mg-tb-30">
                <a 
                  class="Information Information-color mg-b-30"
                  href="#"
                  data-toggle="modal"
                  data-target="#Addagent"
                  >Add agent</a
                >
              </div>
            </div>
            <div
              id="Addagent"
              class=" modal modal-edu-general fullwidth-popup-InformationproModal PrimaryModal-bgcolor fade"
              role="dialog"
            >
              <div  class="modal-dialog">
                <!-- <div class="modal-content"> -->
                  <div class="modal-close-area modal-close-df"></div>
                  <div  class="modal-body">
                    <form>
                    <br><br>
                   
                      <div id="text-form" class="col-md-12 2">
                        <h3>Add  Agent</h3>
                        <div class="form-group">
                          <label class="control-label">Noms</label>
                          <input
                            type="text"
                            v-model="model.addAgent.nomsag"
                            class="form-control"
                          />
                        </div>
                        <div  class="form-group">
                          <label class="control-label">Genre</label>
                          <input
                            type="text"
                            v-model="model.addAgent.genreag"
                            class="form-control"
                          />
                        </div>
                        <div class="form-group">
                          <label class="control-label">Date de naissance</label>
                          <input
                            type="date"
                            v-model="model.addAgent.datenaissag"
                            class="form-control"
                          />
                        </div>

                        <div  class="form-group">
                          <label class="control-label">Telephone</label>
                          <input
                            type="text"
                            v-model="model.addAgent.mobile"
                            class="form-control"
                          />
                        </div>
                        <div  class="form-group">
                          <label class="control-label" >Email</label>
                          <input
                            type="text"
                            v-model="model.addAgent.emailag"
                            class="form-control"
                          />
                        </div>
                        <div  class="form-group">
                          <label class="control-label" >Password</label>
                          <input
                            type="password"
                            v-model="model.addAgent.passwordag"
                            class="form-control"
                          />
                        </div>
                      <div  class="modal-footer footer-modal-admin info-md">
                        <a
                          data-dismiss="modal"
                          class="col-xs-3 info info-danger"
                          href="#"
                          >Cancel</a
                        >
                        <a class="col-xs-0 btn btn-Secondary" @click="saveagent"
                          >Process</a
                        >
                      </div>
                    </div>
                    </form>
                  <!-- </div> -->
                </div>
              </div>
            </div>
            <table>
              <thead>
                <th>Numero</th>
                <th>Noms</th>
                <th>GEnre</th>
                <th>Age</th>
                <th>Telephone</th>
                <th>email</th>
                <th>Actions</th>
              </thead>

              <tbody v-if="this.agents.length > 0">
                <tr v-for="(agent, index) in this.agents" :key="index">
                  <td>{{ agent.id }}</td>
                  <td>{{ agent.nomsag }}</td>
                  <td>{{ agent.genreag }}</td>
                  <td>{{ agent.datena }}</td>
                  <td>{{ agent.mobile }}</td>
                  <td>{{ agent.emailag }}</td>
                  <td>
                    <button
                      data-toggle="modal"
                      data-target="#EditAgent"
                      title="Edit"
                      @click="updateagents(agent)"
                      class="pd-setting-ed"
                    >
                      <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </button>

                    <div
                      id="EditAgent"
                      class="modal modal-edu-general fullwidth-popup-InformationproModal PrimaryModal-bgcolor fade"
                      role="dialog"
                    >
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-close-area modal-close-df"></div>
                          <div class="modal-body">
                            <form >
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="control-label" for="noms"
                                    >Noms</label
                                  >
                                  <input
                                    type="text"
                                   v-model="model.addAgent.nomsag"
                                    class="form-control"
                                  />
                                </div>
                                <div class="form-group">
                                  <label class="control-label" for="genre"
                                    >Genre</label
                                  >
                                  <input
                                    type="text"
                                  v-model="model.addAgent.genreag"
                                    class="form-control"
                                  />
                                </div>
                                <div class="form-group">
                                  <label class="control-label" for="datenaiss"
                                    >Date de naissance</label
                                  >
                                  <input
                                    type="date"
                                  v-model="model.addAgent.datenaissag"
                                    class="form-control"
                                  />
                                </div>

                                <div class="form-group">
                                  <label class="control-label" for="noms"
                                    >Telephone</label
                                  >
                                  <input
                                    type="text"
                                    v-model="model.addAgent.mobile"
                                    class="form-control"
                                  />
                                </div>
                                <div class="form-group">
                                  <label class="control-label" for="email"
                                    >Email</label
                                  >
                                  <input
                                    type="text"
                                    v-model="model.addAgent.emailag"
                                    class="form-control"
                                  />
                                </div>
                              </div>
                              <div
                                class="modal-footer footer-modal-admin info-md"
                              >
                                <a
                                  data-dismiss="modal"
                                  class="col-xs-3 info info-danger"
                                  href="#"
                                  >Cancel</a
                                >
                                <a class="col-xs-0 btn btn-success" 
                                  >Update</a
                                >
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button
                      data-toggle="tooltip"
                      data-target="#Deleteagent"
                      title="Trash"
                     @click="deleteagents(agent.id)" class="pd-setting-ed alert alrt-danger"
                    >
                      <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </button>
                  </td> 
                </tr>
              </tbody>
              <tbody v-else>
                <tr>
                  <td colspan="6">Loading...</td>
                </tr>
              </tbody>
            </table>
            <div class="custom-pagination">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#">Previous</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import axios from "axios";

export default {
    name: "agents",
    names:'agentcreate',
    setup(){
        
    },
    data() {
        return {
            agents: [],
            model: {
                addAgent: {
                    nomsag: '',
                    genreag: '',
                    datenaissag: '',
                    mobile: '',
                    emailag: '',
                    passwordag: ''

                }
            }
            
        };
    },
    mounted() {
        //console.log ('helo guys')
        this.getAgents();
      
    },
    methods: {
        getAgents() {
            axios.get("http://127.0.0.1:8000/api/v1/agent/agent")
                .then((res) => {
                    this.agents = res.data.data;
                    console.log(this.agents);
                });
                },
                saveagent(){
                    axios.post("http://127.0.0.1:8000/api/v1/agent/agent", this.model.addAgent)
                        .then(res => {
                            console.log(res.data)
                            alert(res.data.message)
                            this.model.addAgent = {
                                nomsag: '',
                                genreag: '',
                                datenaissag: '',
                                mobile: '',
                                emailag: '',
                                passwordag: ''
                            }
             })
             .catch(function (error){
                if(error.response){
                if(error.response.status==422){
                   // this.errorList=error.response.data.errors;
                }
                console.log(error.response.data);
                console.log(error.response.status);
                console.log(error.response.header);
            }else if(error.response){
                console.log(error.request);
            }else{
                console.log('error',error.message);
            }
             })  
            },
            
            deleteagents(id){
                if(confirm("Do you want to delete this Agent be cerefful cause he will deespeer inside database")){
                    // console.log(id)
                    axios.delete("http://127.0.0.1:8000/api/v1/agent/agent/${id}").then(res=>{
                        alert(res.data.data.message),
                       this.getAgents();
                    });
                }
                
           
               
            },
            updateagents(agent){
                console.log(agent);
                this.model.addAgent.nomsag=agent.nomsag;
                this.model.addAgent.genreag=agent.genreag;
                this.model.addAgent.datenaissag=agent.datenaissag;
                this.model.addAgent.mobile=agent.mobile;
                this.model.addAgent.emailag=agent.emailag;
                // this.model.addAgent.passwordag=agent.passwordag;
          
            }
        },
    
};

</script>
