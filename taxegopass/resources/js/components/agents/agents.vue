<template>
  <div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
          <div class="chat-wrapper d-lg-flex gap-3 gap-lg-4  p-xl-1 pt-md-5 p-lg-1">         
              <div class="todo-content w-100 pb-0">
                  <div class="row mb-4">
                      <div class="col-auto order-1 d-block d-lg-none">
                          <button type="button" class="btn btn-subtle-success btn-icon file-menu-btn">
                              <i class="ri-menu-2-fill align-bottom"></i>
                          </button>
                      </div>
                      <div class="col-sm order-3 order-sm-2 mt-3 mt-sm-0">
                          <h5 class="fw-semibold mb-2">RVA Admin <span class="badge bg-primary align-bottom ms-2">v1.0.0</span></h5>
                          <p class="text-decoration-underline d-inline-block mb-0 text-muted"><a href="#!" class="text-reset"> Agent List</a></p>
                      </div>
                      <div class="col-auto order-2 order-sm-3 ms-auto">
                          <div class="hstack gap-2">
                              <div class="btn-group" role="group" aria-label="Basic example">
                                  <button class="btn btn-icon fw-semibold btn-secondary"><i class="ti ti-arrow-back-up"></i></button>
                                  <button class="btn btn-icon fw-semibold btn-success"><i class="ti ti-arrow-forward-up"></i></button>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="p-3 bg-light rounded mb-4">
                      <div class="row g-2">
                       
                          <div class="col-lg-auto  card  " >
                            <a class="form-control" data-choices data-choices-search-false @click="printallagent" name="choices-select-status" id="choices-select-status">
                              <i class="ph-printer-fill"></i></a>
                          </div>
                          
                          <div class="col-lg-auto">
                              <select class="form-control"  data-choices data-choices-search-false name="choices-select-sortlist" id="choices-select-sortlist">
                                  <option value="">Sort</option>
                                  <option value="By ID">By ID</option>
                                  <option value="By Name">By Name</option>
                              </select>
                          </div>
                          <div class="col-lg">
                              <div class="search-box">
                                  <input type="text" id="searchTaskList" class="form-control search" placeholder="Search task name">
                                  <i class="ri-search-line search-icon"></i>
                              </div>
                          </div>
                          <div class="col-lg-auto">
                              <button class="btn btn-primary createTask" type="button" data-bs-toggle="modal" data-bs-target="#Addagent">
                                  <i class="ri-add-fill align-bottom"></i> Add Passager
                              </button>
                            
      <!-- removeFileItemModal -->
      <div id="Addagent" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-removetodomodal"></button>
                    </div>
                  <div class="modal-body">
                    <form>
                    <br><br>

                    <div id="text-form" class="col-md-12 2">
                      <h3>Add Agent</h3>
                      <div class="form-group">
                        <label class="control-label">Noms</label>
                        <input type="text" v-model="model.modelAgent.nomsag" class="form-control" />
                      </div>
                      <div class="form-group">
                                  <label for="genre" class="control-label">Genre</label>
                                   <select id="" name="sexe" v-model="model.modelAgent.genreag"
                                      class="form-control">
                                   <option  value="Masculin">Masculin</option>
                                  <option  value="Feminin">Feminin</option>
                                </select>
                             </div>
                      <div class="form-group">
                        <label class="control-label">Date de naissance</label>
                        <input type="date" v-model="model.modelAgent.datenaissag" class="form-control" />
                      </div>

                      <div class="form-group">
                        <label class="control-label">Telephone</label>
                        <input type="text" v-model="model.modelAgent.mobile" class="form-control" />
                      </div>
                      <div class="form-group">
                        <label class="control-label">Email</label>
                        <input type="text" v-model="model.modelAgent.emailag" class="form-control" />
                      </div>
                      <div class="form-group">
                        <label class="control-label">Password</label>
                        <input type="password" v-model="model.modelAgent.passwordag" class="form-control" />
                      </div>
                      <div class="modal-footer footer-modal-admin info-md">
                        <a data-dismiss="modal" class="col-xs-3 info info-danger" href="#">Cancel</a>
                        <a class="col-xs-0 btn btn-Secondary" @click="saveagent">Process</a>
                      </div>
                    </div>
                  </form>
                  
              </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
      <!--end delete modal -->
    </div>                        
    </div>
    </div>
    </div>
                  
          
                  <div class="todo-content position-relative px-4 mx-n4" id="todo-content">
                      <div id="elmLoader">
                          <div class=" text-primary avatar-sm" role="status">
                              <span class="visually-hidden">Loading...</span>
                          </div>
                      </div>
                      <div class="todo-task" id="todo-task">
                          <div class="">
                              <table class="table align-middle position-relative table-nowrap">
                                  <thead class="table-active">
                                    <tr>                      
                                     <th scope="col" class="sort cursor-pointer" data-sort="invoice_id">Numero</th>
                                      <th scope="col" class="sort cursor-pointer" data-sort="customer_name">Nom </th>
                                      <th scope="col" class="sort cursor-pointer" data-sort="email">Genre</th>
                                      <th scope="col" class="sort cursor-pointer" data-sort="create_date">Date de naissance</th>
                                      <th scope="col" class="sort cursor-pointer" data-sort="due_date">Telephone</th>
                                       <th scope="col" class="sort cursor-pointer" data-sort="amount">Email</th>
                                       <th scope="col">Action</th>
                                      </tr>
                                      
                                  </thead>
          
                                  <tbody v-if="this.agents.length > 0">
                <tr v-for="(agent, index) in this.agents" :key="index">
                  <td>{{ agent.id }}</td>
                  <td>{{ agent.nomsag }}</td>
                  <td>{{ agent.genreag }}</td>
                  <td>{{ agent.datenaissag }}</td>
                  <td>{{ agent.mobile }}</td>
                  <td>{{ agent.emailag }}</td>
                     
                      <td>           
     <button class="btn btn-subtle btn-icon btn-sm remove-item-btn" @click="getoneagent(agent.id)" data-bs-target="#updateagent" data-bs-toggle="modal">
      <i class="ph-pencil"></i></button>
      <!-- removeFileItemModal -->
      <div id="updateagent" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-removetodomodal"></button>
                    </div>
                  <div class="modal-body">
                    <form>
                    <br><br>

                    <div id="text-form" class="col-md-12 2">
                      <h3>Add Agent</h3>
                      <div class="form-group">
                        <label class="control-label">Noms</label>
                        <input type="text" v-model="model.modelAgent.nomsag" class="form-control" />
                      </div>
                      <div class="form-group">
                                  <label for="genre" class="control-label">Genre</label>
                                   <select id="" name="sexe" v-model="model.modelAgent.genreag"
                                      class="form-control">
                                   <option  value="Masculin">Masculin</option>
                                  <option  value="Feminin">Feminin</option>
                                </select>
                             </div>
                      <div class="form-group">
                        <label class="control-label">Date de naissance</label>
                        <input type="date" v-model="model.modelAgent.datenaissag" class="form-control" />
                      </div>

                      <div class="form-group">
                        <label class="control-label">Telephone</label>
                        <input type="text" v-model="model.modelAgent.mobile" class="form-control" />
                      </div>
                      <div class="form-group">
                        <label class="control-label">Email</label>
                        <input type="text" v-model="model.modelAgent.emailag" class="form-control" />
                      </div>
                      <div class="modal-footer footer-modal-admin info-md">
                        <a data-dismiss="modal" class="col-xs-3 info info-danger" href="#">Cancel</a>
                        <button type="button" class="btn w-sm btn-danger" data-bs-dismiss="modal" @click="update" id="remove-todoitem">
                         Update
                        </button>
                      </div>
                    </div>
                  </form>
                  
              </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
      <!--end delete modal -->
    </div> 
    <a class="btn btn-subtle btn-icon btn-sm remove-item-btn" @click="deleteagent(agent.id)" data-bs-target="" data-bs-toggle="">
       <i class="ph-trash"></i></a>
      </td>
     </tr>                             
                        
                      </tbody>
                    </table> 
                        </div>
                      </div>
                   
                      <div class="" id="" style="display: none;">
                          <i class="ti ti-search fs-2 text-success"></i>
                          <h6 class="mt-3">Sorry! No Result Found</h6>
                      </div>
                  </div>
                  
          
              </div>
          </div>
  
      </div>
      <!-- container-fluid -->
  </div>
  </div>
  <!-- End Page-content -->
    </template>
<script lang="ts">
import axios from "axios";

import { createToaster } from "@meforma/vue-toaster";
const toaster = createToaster({ /* options */ });
export default {
  name: "agents",
  names: 'agentcreate',
  setup() {

  },
  data() {
    return {
      agents: [],
      model: {
        modelAgent: {
          id:'',
          nomsag: '',
          genreag: '',
          datenaissag: '',
          mobile: '',
          emailag: '',
          passwordag: ''

        }
      },

    };
  },
  mounted() {
    //console.log ('helo guys')
    this.getAgents();
    //this.agentId(this.$route.params.id);

  },
  methods: {
    //Shoawing all agent in table
    getAgents() {
      axios.get("http://127.0.0.1:8000/api/v1/agent/agent")
        .then((res) => {
          this.agents = res.data.data;
          // console.log(this.agents);
        });
      
    },
    printallagent() 
    {
      window.open(`http://127.0.0.1:8000/api/v1/agent/pdf_allagent`);
    },
    //Ading agent in data base
    saveagent() {
      axios.post("http://127.0.0.1:8000/api/v1/agent/agent", this.model.modelAgent)
        .then(res => {
          //console.log(res.data)
          alert(res.data.message)
          this.model.modelAgent = {
            nomsag: '',
            genreag: '',
            datenaissag: '',
            mobile: '',
            emailag: '',
            passwordag: ''
          }
          this.getAgents();
        })
        .catch(function (error) {
          if (error.response) {
            if (error.response.status == 422) {
              // this.errorList=error.response.data.errors;
            }
            
          } else if (error.response) {
            console.log(error.request);
          } else {
            // console.log('error',error.message);
          }
        });
    },

    async getoneagent(idagent) {
      await axios
        .get(`http://127.0.0.1:8000/api/v1/agent/agent/${idagent}`)
        .then((response) => {
          const { id, nomsag, genreag,datenaissag,mobile,emailag } = response.data;
          this.model.modelAgent.id = id;
          this.model.modelAgent.nomsag = nomsag;
          this.model.modelAgent.genreag = genreag;
          this.model.modelAgent.datenaissag = datenaissag;
          this.model.modelAgent.mobile =mobile;
            this.model.modelAgent.emailag =emailag;
          console.warn(response.data);
        })
        .catch((error) => {
          console.log(error);
        });
    },
    update(idagent) {
      axios
        .put(`http://127.0.0.1:8000/api/v1/agent/agent/${this.model.modelAgent.id}`,
          {
            nomsag: this.model.modelAgent.nomsag,
            genreag: this.model.modelAgent.genreag,
            datenaissag: this.model.modelAgent.datenaissag,
            mobile: this.model.modelAgent.mobile,
            emailag: this.model.modelAgent.emailag,
          })
        .then((response) => {
          console.log("data updated successfully" + response);
          this.getAgents();
        })
        .catch((error) => {
          console.log(error);
        });
    },

    /*
     *
     *DELETEING AGENT FROM ID
     *
     */
    /**
     *
     * @param {string} id
     */
    deleteagent(id) {
      if (confirm("Are you sure to delete this agent ?")) {
        axios
          .delete(`http://127.0.0.1:8000/api/v1/agent/agent/${id}`)
          .then((response) => {
            this.getAgents();
            toaster.success(statusbar)
          })
          .catch((error) => {
            console.log(error);
          });
      }
    },
  }
};
</script>
