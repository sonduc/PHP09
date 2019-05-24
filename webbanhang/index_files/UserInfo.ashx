
                currentUserInfo.IsAuthenticated = false;
                currentUserInfo.Username = '';
                currentUserInfo.TotalQuantity = 0;
                var __lc = {};
                __lc.license = 1449022;
                (function() {
                    var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
                    lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
                })();
                var LC_API = LC_API || {};
                LC_API.on_load = function()
                {
                    var custom_variables = [
                  { name: 'Username', value: '' },
                  { name: 'TotalQuantity', value: '0' }
                ];
                LC_API.set_custom_variables(custom_variables);
                };
            