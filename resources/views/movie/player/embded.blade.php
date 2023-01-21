<div class="embed-responsive-item">
    <div id="player"></div>
    <script>
        var error_iterator = 0;
        var playerInstance = jwplayer("player").setup({
            controls: true,
            sharing: true,
            // autostart: true,
            allowFullscreen: true,
            displaytitle: true,
            displaydescription: true,

            skin: {
                name: "netflix"
            },

            logo: {
                file: "{{ asset('images/logo.svg') }}",
                link: "{{ route('index') }}",
                hide: "true",
                position: "top-right"
            },

            captions: {
                color: "#FFF",
                fontSize: 14,
                backgroundOpacity: 0,
                edgeStyle: "raised"
            },

            playlist: [
                @foreach ($playlist->links as $item)
                    {
                        title: "{{ $movie['title'] }} - {{ $item['label'] }} Quality",
                        description: "{{ $genres }}",
                        image: "{{ $poster }}",
                        id: "{{ $playlist['id'] }}",
                        sources: [{
                            file: "{{ $item['url'] }}",
                            label: "{{ $item['label'] }}",
                            onXhrOpen: function(xhr, url) {
                                @if($playlist->provider == "moviebox")
                                @endif
                                // xhr.setRequestHeader('Referer', 'https://usa7-cache14-1.shegu.net/');
                            }
                        }, ],
                        captions: [
                            @foreach ($playlist->tracks as $track)
                                {
                                    kind: "{{ $track->kind ?? 'captions' }}",
                                    file: "{{ $track->url }}",
                                    label: "{{ $track->label ?? 'test' }}"
                                },
                            @endforeach
                        ],
                    },
                @endforeach
            ]
        });

        playerInstance.on('error', function() {
            error_iterator += 1;
            if (error_iterator >= 4) {
                current_item = playerInstance.getPlaylistItem(playerInstance.getPlaylistIndex());
                // send ajax request to report
                $.ajax({
                    url: "{{ route('report_playlist.movie') }}",
                    type: "POST",
                    data: {
                        playlist_id: current_item.id,
                    },
                    success: function(resp) {
                        Snackbar.show({
                            text: resp.message,
                            customClass: "bg-" + resp.status,
                        });
                    }
                });
            } else {
                // if the video is not playing, go to next or previous item based on the current item index
                if (playerInstance.getPlaylistIndex() < playerInstance.getPlaylist().length - 1) {
                    playerInstance.playlistNext();
                } else {
                    playerInstance.playlistItem(0);
                }
            }
        });

        playerInstance.on("ready", function() {
            playerInstance.playlistItem(0);
            playerInstance.addButton(
                '{{ asset('images/next.png') }}',
                'Next Server',
                function() {
                    if (playerInstance.getPlaylistIndex() !== playerInstance.getPlaylist().length) {
                        // If the user is at the first video in the playlist, loop around to the last video
                        playerInstance.playlistItem(Math.min(playerInstance.getPlaylist().length - 1,
                            playerInstance.getPlaylistIndex() + 1));
                    }

                },
                'next',
                'jw-icon-next'
            );


            playerInstance.addButton(
                '{{ asset('images/previous.png') }}',
                'Previous Server',
                function() {
                    if (playerInstance.getPlaylistIndex() === 0) {
                        // If the user is at the first video in the playlist, loop around to the last video
                        playerInstance.playlistItem(Math.max(0, playerInstance.getPlaylist().length - 1));
                    } else {
                        // Otherwise, go to the previous video in the playlist
                        playerInstance.playlistItem(Math.max(0, playerInstance.getPlaylistIndex() - 1));
                    }
                },
                'previous',
                'jw-icon-prev'
            );

            // The following line is a hack to move the button next to the "next" button
            // Note that this is not officially supported so use at your own risk. It has worked fine for me so far.
            $('.jw-controlbar .jw-icon-next').before($('.jw-icon-prev'));

            const buttonId = "download-video-button";
            const iconPath =
                "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwaDI0djI0SDB6Ii8+PHBhdGggZD0iTTMgMTloMTh2Mkgzdi0yem0xMC01LjgyOEwxOS4wNzEgNy4xbDEuNDE0IDEuNDE0TDEyIDE3IDMuNTE1IDguNTE1IDQuOTI5IDcuMSAxMSAxMy4xN1YyaDJ2MTEuMTcyeiIgZmlsbD0icmdiYSgyNDcsMjQ3LDI0NywxKSIvPjwvc3ZnPg==";
            const tooltipText = "Download Video";

            // Call the player's `addButton` API method to add the custom button
            playerInstance.addButton(iconPath, tooltipText, buttonClickAction, buttonId);

            // This function is executed when the button is clicked
            function buttonClickAction() {
                const playlistItem = playerInstance.getPlaylistItem();
                const anchor = document.createElement("a");
                const fileUrl = playlistItem.file;
                anchor.setAttribute("href", fileUrl);
                const downloadName = playlistItem.file.split("/").pop();
                anchor.setAttribute("download", downloadName);
                anchor.style.display = "none";
                document.body.appendChild(anchor);
                anchor.click();
                document.body.removeChild(anchor);
            }

            // Move the timeslider in-line with other controls
            const playerContainer = playerInstance.getContainer();
            const buttonContainer = playerContainer.querySelector(".jw-button-container");
            const spacer = buttonContainer.querySelector(".jw-spacer");
            const timeSlider = playerContainer.querySelector(".jw-slider-time");
            buttonContainer.replaceChild(timeSlider, spacer);

            // Detect adblock
            playerInstance.on("adBlock", () => {
                const modal = document.querySelector("div.modal");
                modal.style.display = "flex";

                document
                    .getElementById("close")
                    .addEventListener("click", () => location.reload());
            });

            // Forward 10 seconds
            const rewindContainer = playerContainer.querySelector(
                ".jw-display-icon-rewind"
            );
            const forwardContainer = rewindContainer.cloneNode(true);
            const forwardDisplayButton = forwardContainer.querySelector(
                ".jw-icon-rewind"
            );
            forwardDisplayButton.style.transform = "scaleX(-1)";
            forwardDisplayButton.ariaLabel = "Forward 10 Seconds";
            const nextContainer = playerContainer.querySelector(".jw-display-icon-next");
            nextContainer.parentNode.insertBefore(forwardContainer, nextContainer);

            // control bar icon
            playerContainer.querySelector(".jw-display-icon-next").style.display = "none"; // hide next button
            const rewindControlBarButton = buttonContainer.querySelector(
                ".jw-icon-rewind"
            );
            const forwardControlBarButton = rewindControlBarButton.cloneNode(true);
            forwardControlBarButton.style.transform = "scaleX(-1)";
            forwardControlBarButton.ariaLabel = "Forward 10 Seconds";
            rewindControlBarButton.parentNode.insertBefore(
                forwardControlBarButton,
                rewindControlBarButton.nextElementSibling
            );

            // add onclick handlers
            [forwardDisplayButton, forwardControlBarButton].forEach((button) => {
                button.onclick = () => {
                    playerInstance.seek(playerInstance.getPosition() + 10);
                };
            });
        });
    </script>
</div>
