<?php
include('../links.php');
include('../segments.php');
display_head();
?>
            <div><!-- Download WinMessenger content -->
                <h1><em>WinMessenger:</em> Small and easy real-time messaging utility</h1>	
                <h2>Downloads</h2>

                <p>Download a complete 31-day trial edition of WinMessenger</p>
                <p><b style="color:Red;">version <?=WM_LATEST_VER?> 32 bits</b>, <?=WM_FILE_SIZE?> MB:</p>
                <ul class="dlList">
                <li>
                <?=DOWNLOAD_1_28?>&nbsp;(Main location)
                </li>
                <li>
                <?=DOWNLOAD_2_28?>&nbsp;(HTTP server 1)
                </li>
                </ul>
                	
                <p><b style="color:Red;">version <?=WM_LATEST_VER?> 64 bits</b>, <?=WM_FILE_SIZE64?> MB:</p>
                <ul class="dlList">
                <li>
                <?=DOWNLOAD_1_28x64?>&nbsp;(Main location)
                </li>
                <li>
                <?=DOWNLOAD_2_28x64?>&nbsp;(HTTP server 1)
                </li>
           	    </ul>

                <p><b style="color:Red;">version 2.1</b>, <?=WM_FILE_SIZE_VER21?> KB:</p>
                <ul class="dlList">
                <li>
                <?=DOWNLOAD_21?>&nbsp;(Main location)
                </li>
              	</ul>

                <p><b>NOTE:</b> Licensed users can download and install the trial edition over their existing licensed installation to update.</p>
                <p>Please read our <a href="http://forum.vypress.com/viewtopic.php?f=10&t=949">community forum topic</a> about how to <a href="http://forum.vypress.com/viewtopic.php?f=10&t=949">register version 2.8 of WinMessenger</a>.</p>

                <p>Useful deployment files for network administrators:</p>
                <ul class="dlList">
                <li>
                  <?=DOWNLOAD_PDF?>&nbsp;(Data file for Microsoft SMS 1.2)
                </li>
                <li>
                  <?=DOWNLOAD_SMS?>&nbsp;(Data file for Microsoft SMS 2.0 or later)</li>
                </ul>
                
                <p>Examples for Developers:</p>
                <ul>
				<li>
				Windows Forms application that uses the WinMessenger service to send and receive messages. <a href="../files/Examples/WindowsFormsClient.zip">Download example</a>
				</li>
				<li>
				ASP .NET web application that provides ability to create a web server that allows users to send and receive messages to/from local network. <a href="../files/Examples/WmWebApplication.zip">Download example</a>
				</li>
				<li>
				JavaScript and VBScript scripts that can be used with Windows Script Host and allow sending messages from command line. <a href="../files/Examples/testWMsend.zip">Download example</a>
				</li>
				<li>
				JavaScript and VBScript scripts that can be used with Windows Script Host and allow receiving messages from command line. <a href="../files/Examples/testWM.zip">Download example</a>
				</li>
				<li>
				HTML pages that use client scripts (JavaScript and VBScript) that can be send to web clients by web servers and allow sending NetBIOS messages to users' local network from the Internet Explorer. <a href="../files/Examples/testWM_html.zip">Download example</a>
				</li>
				<li>
				.NET Web Service that accepts WinMessenger's logged messages. <a href="../files/Examples/LogMessagesWebService.zip">Download example</a>
				</li>
				</ul>
                <div class="hr"></div>

                <p style="text-align:center;">
                To learn more about our other products, please<br/>visit: <?=VYPRESS_LINK?>
              </p>

            </div><!-- Download WinMessenger content -->
<?php display_foot(); ?>