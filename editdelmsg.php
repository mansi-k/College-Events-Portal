
                  
                                <div id="edit" class="dropup" style="float:left">
            						<button class="dropbtn dropdown-toggle btn btn-default" type="button" data-toggle="dropdown" id="editmsg" name="btnedit">Edit</button>
            						<div id="edit" class="dropdown-menu pull-right img-responsive">
            							<table class="loggedin" align="center" border="0">
            								<tr><td>
                                    		<textarea id="edit" name="msgedit" required="required"><?php echo $row['message']; ?></textarea>
                                   	 		</td></tr>
            								<tr><td>
                                    		<button type="submit" name="btn_edit" value="<?php echo $row['id']?>">Post</button>
                                    		</td></tr>
            							</table>
                            		</div>
                        		</div>
                                <div class="delete" style="float:left">
            					<button class="btn btn-default" id="delmsg" name="btn_delete" value="<?php echo $row['id']?>">Delete</button>
                            	</div>
							