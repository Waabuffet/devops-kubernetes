minikube start --extra-config=controller-manager.horizontal-pod-autoscaler-upscale-delay=10s --extra-config=controller-manager.horizontal-pod-autoscaler-downscale-delay=10s --extra-config=controller-manager.horizontal-pod-autoscaler-sync-period=10s --extra-config=controller-manager.horizontal-pod-autoscaler-downscale-stabilization=10s